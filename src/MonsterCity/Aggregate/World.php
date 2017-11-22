<?php

namespace MonsterCity\Aggregate;

use MonsterCity\ValueObject\City;
use MonsterCity\ValueObject\Road;

class World
{
    private $cities;

    private $monsters;

    private function __construct()
    {
        $this->cities = [];
        $this->monsters = [];
    }

    public static function create()
    {
        return new self();
    }

    public function buildCitiesFromMap(string $map)
    {
        $fh = fopen($map, "r") or die('No path');

        while (!feof($fh)) {
            if (preg_match(
                '/^(\w+)\snorth=([^\s]+)\ssouth=([^\s]+)\seast=([^\s]+)\swest=([^\s]+)/',
                fgets($fh),
                $matches
            )) {
                $road = new Road($matches[2], $matches[3], $matches[4], $matches[5]);
                $this->cities[] = new City($matches[1], $road);
            }
        }
    }



    public function populateCities()
    {
        return;
    }
}
