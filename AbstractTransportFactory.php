<?php

require_once('TransportFactory.php');

abstract class AbstractTransportFactory implements TransportFactory
{
    abstract public function createTransport() : Transport;

    /**
     * cette fonction ne doit pas être surchargée
     */
    final public function deliver()
    {
        return $this->createTransport()->deliverOrder();
    }
}
