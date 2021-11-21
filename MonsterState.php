<?php

interface MonsterState
{
    public function attack() : void;

    public function move() : void;

    public function changeState(Monster $monster) : MonsterState;
}
