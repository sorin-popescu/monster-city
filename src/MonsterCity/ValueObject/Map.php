<?php

namespace MonsterCity\ValueObject;

class Map
{
    private $map;

    /**
     * Map constructor.
     * @param $map
     */
    private function __construct($map)
    {
        $this->map = $map;
    }

    public function fromFile(string $map)
    {

        var_dump($matches);die;
        return new self($array);
    }
}
