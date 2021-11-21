<?php

require_once('Transport.php');
require_once('AbstractTransportFactory.php');
require_once('Truck.php');
require_once('Ship.php');

interface TransportFactory
{
    public function createTransport() : Transport;

    public function deliver();
}

class TruckTransportFactory extends AbstractTransportFactory
{
    public function createTransport() : Transport
    {
        return new Truck();
    }
}

class ShipTransportFactory extends AbstractTransportFactory
{
    public function createTransport() : Transport
    {
        return new Ship();
    }
}
