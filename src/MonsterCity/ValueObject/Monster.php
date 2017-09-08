<?php

namespace MonsterCity\ValueObject;

class Monster
{

    /** @var string */
    private $name;

    /** @var City */
    private $position;

    /** @var int */
    private $travel;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move()
    {
        $this->travel++;
    }

    public function kill()
    {
        unset($this);
    }
}
