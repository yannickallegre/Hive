<?php

require_once('Car.php');

class Renolt12 extends Car
{
    private $color;

    private $motorization;

    // la clim
    private $airConditionner;

    private $someOtherOption;

    // ...

    public function __construct($color, $motorization, $airConditionner, $someOtherOption /* ... */)
    {
        //
    }

    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
}

$myCar = new Renolt12('blue', '75cc', true, false /* ... */);
