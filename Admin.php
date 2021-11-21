<?php

declare(strict_types=1);
require_once('User.php');

final class Admin extends User
{
    private array $roles = [];
    public static $nombreAdminInitialises = 0;
    public const STATUS_LOCKED = 'locked';
    public const STATUS_ACTIVE = 'is_active';
    public const STATUS_INACTIVE = 'inactive';

    // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
    public function __construct(string $email, string $status = self::STATUS_ACTIVE, array $roles = [])
    {
        parent::__construct($email, $status);
    }

    // Méthode d'ajout d'un rôle, puis on supprime les doublons avec array_filter
    public function addRole(string $role): void
    {
        $this->roles[] = $role;
        $this->roles = array_filter($this->roles);
    }

    // Méthode de renvoie des rôles, dans lequel on définit le rôle ADMIN par défaut
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ADMIN';

        return $roles;
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    // mise à jour des valeurs des propriétés statiques de la classe courant avec `self`, et de la classe parent avec `parent`
    public static function nouvelleInitialisation()
    {
        self::$nombreAdminInitialises++; // classe Admin
        parent::$nombreUtilisateursInitialises++; // classe User
    }

    public function printCustomStatus()
    {
        echo "<p>L'administrateur {$this->email} a pour status :</p>";
        $this->printStatus(); // On appelle printStatus du parent depuis la classe enfant
    }

    // la méthode est entièrement réécrite ici :) seule la signature reste inchangée
    public function setStatus(string $status): void
    {
        if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_LOCKED])) {
            trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_LOCKED])), E_USER_ERROR);
        };

        $this->status = $status;
    }

    public function getStatus(): string
    {
        return strtoupper(parent::getStatus());
    }

    public function getUsername(): string
    {
        return $this->email;
    }
}

Admin::nouvelleInitialisation();
var_dump(Admin::$nombreAdminInitialises, Admin::$nombreUtilisateursInitialises);

// Ceci est impossible maintenant que la classe Admin est marqué comme finale.
// class SuperAdmin extends Admin {}


$admin = new Admin('trompete@guy.com');
var_dump($admin);

$admin = new Admin('michel@petrucciani.com');
var_dump($admin);
$admin->setStatus(Admin::STATUS_INACTIVE);
