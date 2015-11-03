<?php

namespace Skywox\GermanyCustomsBundle\Command;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

/**
 * Class EdifactCommand
 * @package GermanyCustomsBundle\Command
 */
abstract class EdifactCommand extends ContainerAwareCommand
{
    /** @var Parser */
    protected $yamlParser;

    /** @var EntityManager */
    protected $entityManager;

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
    }

    /**
     * @param string $table
     * @param bool $returnYaml
     * @return array
     */
    protected function getTableStructure($table, $returnYaml = false)
    {
        $tableSchemaFile = __DIR__ . '/../Resources/config/doctrine/' . $table . '.orm.yml';
        if (!file_exists($tableSchemaFile)) {
            throw new \UnexpectedValueException('table schema file "' . $tableSchemaFile . '" not found');
        }

        $yaml = $this->yamlParser->parse(file_get_contents($tableSchemaFile));
        $tableEntity = array_keys($yaml)[0];

        $fields = array_merge($yaml[$tableEntity]['id'], $yaml[$tableEntity]['fields']);

        ksort($fields);

        if ($returnYaml) {
            return [$yaml, $fields, $tableEntity, $tableSchemaFile];
        }

        return [$tableEntity, $fields, $yaml[$tableEntity]['id']];
    }
}