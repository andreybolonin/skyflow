<?php

namespace Skywox\GermanyCustomsBundle\Command;

use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManager;
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
    /** @var Parser */
    private $yamlParser;

    /** @var EntityManager */
    private $entityManager;

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
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->yamlParser = new Parser();
        $this->entityManager = $this->getContainer()->get('doctrine')->getManager();
        $this->entityManager->getConnection()->getConfiguration()->setSQLLogger(null);

        $edifactFilename = $input->getArgument('edifactFilename');

        if (!file_exists($edifactFilename)) {
            $output->writeln($edifactFilename . ' not found');
            return;
        }

        $fp = fopen($edifactFilename, 'r');
        $counter = 0;
        $time = 0;

        while (!feof($fp)) {
            $counter++;

            $msg = fgets($fp);

            // skip headers strings
            $msgHeader = substr($msg, 0, 3);
            if (in_array($msgHeader, ['UNB', 'UNH', 'UNT', 'UNZ'])) {
                continue;
            }

            // message example: 000010001T01000i+00001391,000000245Da Praeferenzzucker mit Ursprung in Indien nicht im Rahmen des APS eingef▒hrt wird, ist die Integration mit Ma▒nahme 142 nicht korrekt (es ist keine Form A erforderlich).  Daher sind die Zolls▒tze mit Ma▒nahme 103 und Ursprung integriert worden.
            $id = substr($msg, 0, 5);
            $number = substr($msg, 5, 4);
            $sameTable = isset($table) && $table == substr($msg, 9, 6);
            $table = substr($msg, 9, 6);
            $operation = substr($msg, 15, 1); // i - insert, u - update, d - delete
            $data = substr($msg, 16);

            // Count speed of command processing
            if ($counter % 100 == 0) {
                echo $counter . ' ' . round((100 / (microtime(true) - $time))) . ' rows per second' . PHP_EOL;
                $time = microtime(true);
            }

            // TODO This is only for testing to catch unexpected values, delete in production mode
            if (strlen($id) < 5 || strlen($number) < 4 || strlen($table) < 6 || !in_array($table[0], ['T', 'N']) || $operation != 'i') {
                var_dump($id, $number, $table, $operation, $data);
                continue;
            }

            if (!$sameTable) {
                // fill out entity with new values
                list($tableEntity, $fields) = $this->getTableStructure($table);
            }

            if (!isset($tableEntity) && !isset($fields)) {
                throw new \UnexpectedValueException('$tableEntity and $fields is not set');
            }

            $entity = $this->getEntityByOperation($operation, $tableEntity);
            $start = 0;
            foreach ($fields as $name => $options) {
                $setterName = 'set' . str_replace('_', '', $name);
                $value = $this->parseColumnValue($options, $data, $start, $fp);

                if (is_string($value)) {
                    $value = iconv('ISO-8859-15', 'UTF-8', $value);
                }

                $entity->$setterName($value);
            }

            // insert, update or delete row in MySQL database
            try {
                $this->entityManager->merge($entity);
                $this->entityManager->flush();
                $this->entityManager->clear();
            } catch (DBALException $e) {
                echo $e->getMessage() . PHP_EOL;
                var_dump($data);
                die;
            }
        }

        fclose($fp);
    }

    /**
     * @param $table
     * @return array
     */
    private function getTableStructure($table)
    {
        $tableSchemaFile = __DIR__ . '/../Resources/config/doctrine/' . $table . '.orm.yml';
        if (!file_exists($tableSchemaFile)) {
            throw new \UnexpectedValueException('table schema file "' . $tableSchemaFile . '" not found');
        }

        $yaml = $this->yamlParser->parse(file_get_contents($tableSchemaFile));
        $tableEntity = array_keys($yaml)[0];

        $fields = array_merge($yaml[$tableEntity]['id'], $yaml[$tableEntity]['fields']);

        ksort($fields);

        return [$tableEntity, $fields];
    }

    /**
     * @param $operation
     * @param $tableEntity
     * @return mixed
     */
    private function getEntityByOperation($operation, $tableEntity)
    {
        switch ($operation) {
            case 'i': // insert
                $entity = new $tableEntity;
                break;

            case 'u': // update
                // TODO Update operation logic
                break;

            case 'd': // delete
                // TODO Delete operation logic
                break;

            default:
                throw new \UnexpectedValueException('undefined operation "' . $operation . '"');
        }

        if (!isset($entity)) {
            throw new \UnexpectedValueException('no logic for operation "' . $operation . '"');
        }

        return $entity;
    }

    /**
     * @param $options
     * @param $data
     * @param $start
     * @param $fp
     * @return \DateTime|float|int|string
     */
    private function parseColumnValue($options, $data, &$start, $fp)
    {
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
                    $value .= fgets($fp, 4096);
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
        return $value;
    }
}