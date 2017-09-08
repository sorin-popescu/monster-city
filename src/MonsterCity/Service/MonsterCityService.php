<?php

namespace MonsterCity\ValueObject;

use MonsterCity\Aggregate\World;

class MonsterCityService
{
    private $map;

    public function __construct($map)
    {
        $this->map = $map;
    }

    public function loadMap()
    {
        return World::fromFile($this->map);
    }
}
