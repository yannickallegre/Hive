<?php

require_once('Monster.php');
require_once('MonsterState.php');

final class Mondozor implements Monster
{
    /** @var MonsterState */

    public function __construct(MonsterState $state)
    {
        $this->changeState($state);
    }

    public function attack() : void
    {
        $this->state->attack();
    }

    public function move() : void
    {
        $this->state->move();
    }

    public function changeState(MonsterState $state) : Monster
    {
        $this->state = $state;
        $this->state->setMonster($this);

        return $this;
    }
}
