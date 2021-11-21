<?php

interface Monster
{
    public function attack() : void;

    public function move() : void;

    public function changeState(MonsterState $state) : Monster;
}
