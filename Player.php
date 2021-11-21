<?php
require_once('User.php');

class Player extends User
{
    // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
    public function __construct(string $email, string $username, string $status = self::STATUS_ACTIVE)
    {
        parent::__construct($email, $status);
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
