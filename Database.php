<?php

class Database
{
    private static $instance = null;

    // permet de faire des requêtes SQL à l'aide de PDO
    // @doc https://www.php.net/manual/intro.pdo.php
    protected $connection;

    private function __construct()
    {
        $this->connection = new PDO(PDO_DSN, USER, PASSWD);
    }
    

    // INTERDIT l'appele à l'opérateur "clone"
    private function __clone() {}


    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

const PDO_DSN = 'mysql:host=localhost;dbname=test';
const USER = 'root';
const PASSWD = 'root';

$connection = Database::getInstance()->getConnection();
$stmt = $connection->prepare('SELECT * FROM users');
$users = $stmt->execute();
