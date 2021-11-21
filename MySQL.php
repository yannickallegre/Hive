<?php

require_once('DatabaseInterface.php');

class MySQL implements DatabaseInterface
{
    public function execute($query) : self
    {
        /*...*/
        return self;
    }

    public function fetchAll() : array
    {
        /*...*/
        return array();
    }
}
