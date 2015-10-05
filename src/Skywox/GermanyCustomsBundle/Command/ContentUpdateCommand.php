<?php

namespace Skywox\GermanyCustomsBundle\Command;

use Doctrine\DBAL\DBALException;
use Skywox\GermanyCustomsBundle\Type\EDIDateTime;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

/**
 * Class ContentUpdateCommand
 * @package GermanyCustomsBundle\Command
 */
class ContentUpdateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('germany-customs:update-content')
            ->setDescription('Update Germany Customs database content from UN\EDIFACT file')
            ->addArgument('edifactFilename');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     *
     * TODO Split into multiple methods
     * TODO Optimize command. Current realization is too slow (1 row per second after 10 minutes of processing)
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $edifactFilename = $input->getArgument('edifactFilename');

        if (!file_exists($edifactFilename)) {
            $output->writeln($edifactFilename . ' not found');
            return;
        }

        $fp = fopen($edifactFilename, 'r');

        $counter = 0;
        $skip = 13200;
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $yamlParser = new Parser();
        $time = 0;
        while (!feof($fp)) {
            $counter++;

            $msg = fgets($fp);

            if ($counter <= $skip) {
                continue;
            }

            if (substr($msg, 0, 3) == 'UNB' || substr($msg, 0, 3) == 'UNH') {
                continue;
            }

            // message example: 000010001T01000i+00001391,000000245Da Praeferenzzucker mit Ursprung in Indien nicht im Rahmen des APS eingef▒hrt wird, ist die Integration mit Ma▒nahme 142 nicht korrekt (es ist keine Form A erforderlich).  Daher sind die Zolls▒tze mit Ma▒nahme 103 und Ursprung integriert worden.
            $id = substr($msg, 0, 5);
            $number = substr($msg, 5, 4);
            $table = substr($msg, 9, 6);
            $operation = substr($msg, 15, 1); // i - insert, u - update, d - delete
            $data = substr($msg, 16);

            if (strlen($id) < 5 || strlen($number) < 4 || strlen($table) < 6 || !in_array($table[0], ['T', 'N']) || $operation != 'i') {
                var_dump($id, $number, $table, $operation, $data);
                continue;
                //die;
            }

            if ($counter % 100 == 0) {
                echo $counter . ' ' . round((100 / (microtime(true) - $time))) . ' rows per second' . PHP_EOL;

                $time = microtime(true);
            }

            $tableSchemaFile = __DIR__ . '/../Resources/config/doctrine/' . $table . '.orm.yml';
//            if (!file_exists($tableSchemaFile)) {
//                $output->writeln('table schema file "' . $tableSchemaFile . '" not found');
//                return;
//            }

            $yaml = $yamlParser->parse(file_get_contents($tableSchemaFile));
            $tableEntity = array_keys($yaml)[0];

            $fields = array_merge($yaml[$tableEntity]['id'], $yaml[$tableEntity]['fields']);

            switch ($operation) {
                case 'i': // insert
                    $entity = new $tableEntity;
                    break;

                case 'u': // update
                    $entity = new $tableEntity;
                    break;

                case 'd': // delete
                    $entity = new $tableEntity;
                    break;

                default:
                    throw new \UnexpectedValueException('undefined operation "' . $operation . '"');
            }

            $start = 0;
            foreach ($fields as $name => $options) {
                $setterName = 'set' . str_replace('_', '', $name);

                switch ($options['otype']) {
                    case 'CHAR':
                        $value = substr($data, $start, $options['length']);
                        $start += $options['length'];
                        break;

                    case 'VARCHAR':
                        $endPos = strpos(substr($data, $start + 1), '"+');
                        $value = substr($data, $start + 1, $endPos);
                        $start += strlen($value) + 3;
                        break;

                    case 'DATE':
                        // format is DDMMYYYYHH24MISS
                        $value = EDIDateTime::ediCreateFromFormat('dmYHis', substr($data, $start, 14));
                        $start += 14;
                        break;

                    case 'NUMBER':
                        if ($options['type'] == 'decimal') {
                            $value = (float)str_replace(',', '.', substr($data, $start, $options['precision'] + 2)); // 1 symbol uses for number sign +/-, 1 symbol for comma
                            $start += $options['precision'] + 2;
                        } else {
                            $value = (int)substr($data, $start, $options['length'] + 1); // 1 symbol uses for number sign +/-
                            $start += $options['length'] + 2; // +1 symbol for comma
                        }

                        break;

                    case 'LONG':
                        $length = (int)substr($data, $start, 9);
                        $start += 9;
                        $value = substr($data, $start, $length);
                        while (strlen($value) < $length) {
                            $value .= fgets($fp);
                        }
                        $start += $length;
                        break;

                    case 'CLOB':
                        $length = (int)substr($data, $start, 9);
                        $start += 9;
                        $value = '';
                        while (strlen($value) < $length) {
                            $value .= fgets($fp);
                        }
                        break;

                    default:
                        throw new \UnexpectedValueException('undefined field type "' . $options['type'] . '"');
                }

                $entity->$setterName($value);
            }

            try {
                $entityManager->merge($entity);
                $entityManager->flush();
            } catch (DBALException $e) {
                continue;
            }
        }

        fclose($fp);
    }
}