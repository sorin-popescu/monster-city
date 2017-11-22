<?php

namespace MonsterCity\Service;

use MonsterCity\Aggregate\World;

class MonsterCityService
{
    /** @var World */
    private $world;

    public function __construct()
    {
    }

    public function createWorld()
    {
        $this->world = World::create();
    }

    public function buildCitiesFromMap($map)
    {
        $this->world->buildCitiesFromMap($map);
    }
}
