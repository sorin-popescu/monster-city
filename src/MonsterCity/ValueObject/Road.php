<?php

namespace MonsterCity\ValueObject;

class Road
{
    private $north;

    private $south;

    private $east;

    private $west;

    /**
     * Road constructor.
     * @param $north
     * @param $south
     * @param $east
     * @param $west
     */
    public function __construct($north, $south, $east, $west)
    {
        $this->north = $north;
        $this->south = $south;
        $this->east = $east;
        $this->west = $west;
    }
}
