<?php

require __DIR__ . '/../vendor/autoload.php';

use MonsterCity\Application\CreateMonstersCommand;

$application = new \Symfony\Component\Console\Application('Monster city', '1.0.0');

$service = new \MonsterCity\Service\MonsterCityService(__DIR__ . '/../map/world_map');

$application->add(new CreateMonstersCommand($service));
$application->add(new \MonsterCity\Application\CreateMapCommand($service));

$application->run();
