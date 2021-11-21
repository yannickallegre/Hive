<?php

require_once('MySQL.php');

class UserRepository
{
    private $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $users = [];
        $results = $this->database
            ->execute('SELECT * FROM users')
            ->fetchAll()
        ;

        foreach($results as $result) {
            $users[] = new User($result);
        }

        return $users;
    }
}

$userMySQLRepository = new UserRepository(new MySQL());
