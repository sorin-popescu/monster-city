<?php

namespace MonsterCity\Aggregate;

class World
{
    private $cities;

    private function __construct()
    {
    }

    public static function fromFile($file)
    {
        file_get_contents($file);
    }

    public function populateCities()
}
