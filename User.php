<?php

declare(strict_types=1);

abstract class User
{
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public string $email;
    public string $status = self::STATUS_ACTIVE;
    public static $nombreUtilisateursInitialises = 0;

    public function __construct(string $email, string $status = self::STATUS_ACTIVE)
    {
        $this->email = $email;
        $this->status = $status;
    }

    public function setStatus(string $status): void
    {
        assert(
            in_array($status), [static::STATUS_aCTIVE, static::STATUS_INACTIVE],
            sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [static::STATUS_ACTIVE, static::STATUS_INACTIVE]))
        );

        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function printStatus()
    {
        // vous pouvez accéder au statut comme si la propriété appartenait à Admin :)
        echo '<p>' . $this->status . '</p>';
    }

    abstract public function getUsername(): string;
}
