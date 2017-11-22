<?php

namespace MonsterCity\ValueObject;

class Residents
{
    private $locals;

    public function __construct()
    {
        $this->locals = [];
    }

    public function moveIn(Monster $monster)
    {
        array_push($this->locals, $monster);
    }

    public function moveOut(Monster $monster)
    {
        unset($this->locals[array_search($monster, $this->locals)]);
    }

    public function shouldBeAFight()
    {
        return count($this->locals) === 2;
    }

    public function kill()
    {
        foreach ($this->locals as $monster) {
            $monster->kill();
        }
    }
}
