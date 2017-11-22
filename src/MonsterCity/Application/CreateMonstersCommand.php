<?php

namespace MonsterCity\Application;

use MonsterCity\Service\MonsterCityService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateMonstersCommand extends Command
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
        $number = $input->getArgument('monsters_number');

    }

    /**
     * Configures the command instance.
     */
    protected function configure()
    {
        $this->setName('unleash:monsters')
            ->setDescription('Muahaha!')
            ->addArgument(
                'monsters_number',
                InputArgument::REQUIRED,
                'Monsters number'
            );
    }
}
