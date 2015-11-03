<?php

namespace SkyFlow\GermanyCustomsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Dumper;

/**
 * Class SchemaUpdateCommand
 * @package GermanyCustomsBundle\Command
 */
class SchemaUpdateCommand extends ContainerAwareCommand
{
    const PREFIX = 'gc_';
    const NAMESPACE_PREFIX = 'SkyFlow\GermanyCustomsBundle\\';

    protected function configure()
    {
        $this
            ->setName('germany-customs:update-schema')
            ->setDescription('Update Germany Customs database schema from CSV file')
            ->addArgument('schemaFilename');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $schemaFilename = $input->getArgument('schemaFilename');

        if (empty($schemaFilename)) {
            $schemaFilename = __DIR__ . '/../Resources/schema/schema_current.csv';
        }

        $entityDestination = __DIR__ . '/../Resources/config/doctrine/';

        $fp = fopen($schemaFilename, 'r');
        $dumper = new Dumper();

        $tableSchema = null;
        $entityName = null;
        $entityFile = null;
        $columnCounter = 0;
        while (!feof($fp)) {
            list($table, $tableDesc, $column, $columnType, $pk, $fk, $comment) = fgetcsv($fp, null, ';');

            // skip first CSV line of headers
            if ($table == 'Name') {
                continue;
            }

            if (!empty($table) && !is_null($entityFile)) {
                file_put_contents($entityFile, $dumper->dump($tableSchema, 100));
                $entityFile = null;
            }

            $columnCounter++;

            if (!empty($table) && is_null($entityFile)) {
                $entityFile = $entityDestination . $table . '.orm.yml';
                $entityName = self::NAMESPACE_PREFIX . 'Entity\\' . $table;
                $tableSchema = [
                    $entityName => [
                        'type' => 'entity',
                        'table' => self::PREFIX . $table,
                        'description' => $tableDesc,
                    ]
                ];
            }

            $column = str_replace(' ', '_', $column);
            $column = str_replace('-', '_', $column);
            $column = str_replace('/', '_', $column);
            $column = str_replace("'", '', $column);
            $column = str_replace('"', '', $column);
            $column = str_replace('„', '', $column);
            $column = str_replace('“', '', $column);
            $column = str_replace('.', '', $column);
            $column = str_replace('(', '', $column);
            $column = str_replace(')', '', $column);
            $column = str_replace(',', '', $column);

            // Column names is not clear for us, so we use alphabetical prefix for all database columns
            // and also MySQL maximum column name length is 64, so we need to cut off too long names
            $column = $this->getNameFromNumber($columnCounter) . '_' . substr($column, 0, 60);

            $field = [];

            // Parse column type
            if (substr($columnType, 0, 4) == 'CHAR') {
                $field['type'] = 'string';
                $field['length'] = (int)substr($columnType, 5, -1);
            }

            if (substr($columnType, 0, 7) == 'VARCHAR') {
                $field['type'] = 'string';
                $field['length'] = (int)substr($columnType, 8, -1);
            }

            if ($columnType == 'DEPRECATED') {
                continue;
            }

            if ($columnType == 'DATE') {
                $field['type'] = 'edidatetime';
            }

            if (substr($columnType, 0, 6) == 'NUMBER') {
                $params = explode(',', substr($columnType, 7, -1));
                if (isset($params[1])) {
                    // decimal
                    $field['type'] = 'decimal';
                    $field['precision'] = (int)$params[0];
                    $field['scale'] = (int)$params[1];
                } else {
                    // integer
                    $field['type'] = (int)$params[0] > 10 ? 'bigint' : 'integer';
                    $field['length'] = (int)$params[0];
                }
            }

            if ($columnType == 'LONG' || $columnType == 'CLOB') {
                $field['type'] = 'text';
            }

            if (!isset($field['type'])) {
                throw new \UnexpectedValueException('field type not set: ' . $columnType);
            }


            $field['otype'] = explode('(', $columnType)[0];

            if (!empty($field['comment'])) {
                $field['comment'] = $comment;
            }

            $pk = ($pk == 'ja' ? true : false);
            //$fk = $fk; // TODO Set fk (oneToOne, manyToOne, manyToMany)

            if (!isset($tableSchema[$entityName]['fields'])) {
                $tableSchema[$entityName]['fields'] = [];
            }

            if (!isset($tableSchema[$entityName]['id'])) {
                $tableSchema[$entityName]['id'] = [];
            }

            $tableSchema[$entityName][$pk ? 'id' : 'fields'][$column] = $field;

            $output->writeln($table . ' - ' . $column . ' - OK');
        }

        file_put_contents($entityFile, $dumper->dump($tableSchema, 100));

        fclose($fp);
    }

    /**
     * @param $num
     * @param bool $r Flag: recursive call or not
     * @return string Letter presentation of number like AAA, AAB, etc
     */
    private function getNameFromNumber($num, $r = false)
    {
        if (!$r) $num = $num + 702;

        $numeric = ($num - 1) % 26;
        $letter = chr(65 + $numeric);
        $num2 = intval(($num - 1) / 26);
        if ($num2 > 0) {
            return $this->getNameFromNumber($num2, true) . $letter;
        } else {
            return $letter;
        }
    }
}