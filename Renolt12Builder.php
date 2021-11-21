<?php

require_once('CarBuilder.php');
require_once('Renolt12.php');

class Renolt12Builder implements CarBuilder
{
    private $car;

    public function __construct()
    {
        $this->car = new Renolt12('yellow', '250cc', true, false);
    }

    public function paintCar(string $color) : CarBuilder
    {
        $this->car->setColor($color);
    }

    public function mountEngine(string $motorization) : CarBuilder
    {
        $this->car->setMotorization($motorization);
    }

    public function installAirConditionner() : CarBuilder
    {
        $this->car->setAirConditionner(true);
    }

    public function getCar() : Car
    {
        return $this->car;
    }
}

$myRenolt12 = (new Renolt12Builder())
    ->paintCar('yellow')
    ->mountEngine('250cc')
    ->installAirConditionner()
    ->getCar()
;
