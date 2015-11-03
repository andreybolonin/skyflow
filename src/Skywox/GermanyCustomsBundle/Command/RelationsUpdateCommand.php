<?php

namespace Skywox\GermanyCustomsBundle\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Dumper;

/**
 * Class RelationsUpdateCommand
 * @package GermanyCustomsBundle\Command
 */
class RelationsUpdateCommand extends EdifactCommand
{
    const PREFIX = 'gc_';
    const NAMESPACE_PREFIX = 'Skywox\GermanyCustomsBundle\\';
    const COLUMN_DELIMITER = ',';
    const FK_PREFIX = 'fk_';

    protected function configure()
    {
        $this
            ->setName('germany-customs:update-relations')
            ->setDescription('Update Germany Customs database relations from CSV file')
            ->addArgument('relationsFilename');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);

        $relationsFilename = $input->getArgument('relationsFilename');

        if (empty($relationsFilename)) {
            $relationsFilename = __DIR__ . '/../Resources/schema/schema_relations_current.csv';
        }

        $fp = fopen($relationsFilename, 'r');

        $relationsCounter = [];

        $line = 0;
        while (!feof($fp)) {
            $line++;

            list($sourceTable, $sourceColumns, $destTable, $destColumns, $relationType) = fgetcsv($fp, null, ';');

            if (!isset($relationsCounter[$sourceTable . '+' . $destTable])) {
                $relationsCounter[$sourceTable . '+' . $destTable] = 0;
            }

            $relationsCounter[$sourceTable . '+' . $destTable]++;

            if ($relationsCounter[$sourceTable . '+' . $destTable] > 1) {
                throw new \UnexpectedValueException('relation from "' . $sourceTable . '" to "' . $destTable . '" was already defined earlier. Definition duplicate on line ' . $line);
            }

            // Uncomment next string if you just want to ensure that your schema_relations file does not contain duplicate relations
            //continue;

            $sourceMapping = null;
            $destMapping = null;

            list($sourceYaml, $sourceFields, $sourceEntity, $sourceSchemaFile) = $this->getTableStructure($sourceTable, true);
            list($destYaml, $destFields, $destEntity, $destSchemaFile) = $this->getTableStructure($destTable, true);

            $sourceColumns = explode(self::COLUMN_DELIMITER, $sourceColumns);
            $destColumns = explode(self::COLUMN_DELIMITER, $destColumns);

            if (!count($sourceColumns) || !count($destColumns)) {
                throw new \UnexpectedValueException('unexpected columns names on line ' . $line);
            }

            if (count($sourceColumns) != count($destColumns)) {
                throw new \UnexpectedValueException('source columns number not the same as destination columns number on line ' . $line);
            }

            $this->testColumnsExistence($sourceColumns, $sourceFields, $sourceTable);
            $this->testColumnsExistence($destColumns, $destFields, $destTable);

            switch($relationType) {
                case 'N:1':
                    $relationType = 'manyToOne';
                    $relationTypeInverted = 'oneToMany';
                    break;
                case 'N:N':
                    $relationType = 'manyToMany';
                    $relationTypeInverted = $relationType;
                    break;
                default:
                    throw new \UnexpectedValueException('unknown relation type "' . $relationType . '"; available only "N:1" or "N:N"');
            }

            if (!isset($sourceYaml[$relationType])) {
                $sourceYaml[$relationType] = [];
            }

            $sourceFkName = self::FK_PREFIX . $destTable;
            $destFkName = self::FK_PREFIX . $sourceTable;

            $sourceYaml[$relationType][$sourceFkName] = [
                'targetEntity' => $destEntity,
                'mappedBy' => $destFkName,
            ];

            $destYaml[$relationTypeInverted][$destFkName] = [
                'targetEntity' => $sourceEntity,
                'inversedBy' => $sourceFkName,
            ];

            if (count($sourceColumns) > 1) {
                $sourceYaml[$relationType][$sourceFkName]['joinColumns'] = [];
                $destYaml[$relationTypeInverted][$destFkName]['joinColumns'] = [];

                foreach ($sourceColumns as $i => $column) {
                    $sourceYaml[$relationType][$sourceFkName]['joinColumns'][$column] = [
                        'referencedColumnName' => $destColumns[$i]
                    ];
                    $destYaml[$relationTypeInverted][$destFkName]['joinColumns'][$destColumns[$i]] = [
                        'referencedColumnName' => $column
                    ];
                }
            } else {
                $sourceYaml[$relationType][$sourceFkName]['joinColumn'] = [
                    'name' => $sourceColumns[0],
                    'referencedColumnName' => $destColumns[0],
                ];

                $destYaml[$relationTypeInverted][$destFkName]['joinColumn'] = [
                    'name' => $destColumns[0],
                    'referencedColumnName' => $sourceColumns[0],
                ];
            }

            $dumper = new Dumper();

            file_put_contents($sourceSchemaFile, $dumper->dump($sourceYaml, 100));
            file_put_contents($destSchemaFile, $dumper->dump($destYaml, 100));

            echo $line . ' line was successfully treated!' . PHP_EOL;
        }

        fclose($fp);
    }

    /**
     * @param array $columns
     * @param array $fields
     * @param string $table
     */
    private function testColumnsExistence($columns, $fields, $table)
    {
        foreach ($columns as $name) {
            if (!in_array($name, array_map('strtolower', array_keys($fields)))) {
                throw new \UnexpectedValueException('column "' . $name . '" not found in table ' . $table);
            }
        }
    }
}