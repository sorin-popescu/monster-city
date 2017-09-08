<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;


$application = new Application('Monster city', '1.0.0');


$application->add(new \MonsterCity\Application\MonsterCityCommand($service));

$application->run();
