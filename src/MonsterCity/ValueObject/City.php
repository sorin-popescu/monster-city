<?php

namespace MonsterCity\ValueObject;

class City
{
    private $name;

    /** @var residents $residents */
    private $residents;

    private $road;

    public function __construct(string $name, Road $road)
    {
        $this->name = $name;
        $this->residents = new Residents();
        $this->road = $road;
    }

    public function moveIn(Monster $monster)
    {
        $this->residents->moveIn($monster);

        if ($this->residents->shouldBeAFight()) {
            $this->residents->kill();
//            $this->destroy();
        }

        return $this;
    }

//    private function destroy()
//    {
//        unset($this);
//    }
}
