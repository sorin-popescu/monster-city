<?php

namespace MonsterCity\Application;

use MonsterCity\Service\MonsterCityService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateMapCommand extends Command
{
    /** @var MonsterCityService */
    private $service;

    public function __construct(MonsterCityService $service)
    {
        $this->service = $service;
        parent::__construct();
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->service->createWorld();
        $this->service->buildCitiesFromMap('/Users/sorin.popescu/workspace/monster-city/map/world_map');
    }

    /**
     * Configures the command instance.
     */
    protected function configure()
    {
        $this->setName('be:light')
            ->setDescription('And there was light!')
            ->addArgument(
                'map_path',
                InputArgument::OPTIONAL,
                'Path to the map file.'
            );
    }
}
