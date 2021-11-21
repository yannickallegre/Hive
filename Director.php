<?php

require_once('Renolt12Builder.php');

class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function createOpenClassroomsEdition()
    {
        return $this->builder->paintCar('purple')
            ->installAirConditionner()
            ->getCar()
        ;
    }

    public function createSwagEdition()
    {
        return $this->builder->paintCar('gray')
            ->installAirConditionner()
            ->mountEngine('60cc')
            ->getCar()
        ;
    }

    public function createRichEdition()
    {
        return $this->builder->paintCar('gold')
            ->installAirConditionner()
            ->mountEngine('600cc')
            ->getCar()
        ;
    }
}

$director = new Director(new Renolt12Builder());
// Je suis riche

$myCar = $director->createRichEdition();
