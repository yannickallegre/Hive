<?php

declare(strict_types=1);

class Pont
{
    private float $longueur = 0;
    private float $largeur = 0;

    // $unite ne sert que dans la classe, on met cette propriété en privé.
    private string $unite = 'm²';

    // Définition de la propriété statique. Elle sera partagée
    public static int $nombrePietons = 0;

    private const UNITE = 'm²';

    public function getSurface(): string
    {
        return ($this->longueur * $this->largeur) . self::UNITE; // on renvoie l'unité en plus de la surface
    }

    public function setLongueur(float $longueur): void
    {
        self::validerTaille($longueur);

        $this->longueur = $longueur;
    }

    public function setLargeur(float $largeur): void
    {
        if ($largeur < 0) {
            trigger_error(
                'La longeueur est trop courte. (min 1)',
                E_USER_ERROR
            );
        }

        $this->largeur = $largeur;
    }

    public function getLongueur(): float {
        return $this->longueur;
    }

    public function getLargeur(): float {
        return $this->largeur;
    }

    public static function validerTaille(float $taille): bool
    {
        if ($taille < 50.0) {
            trigger_error(
                'La longeur est trop courte. (min 50m)',
                E_USER_ERROR
            );
        }

        return true;
    }

    // Je laisse volontairement la méthode non statique.
    // Seule la référence à la propriété est importante.
    public function nouveauPieton()
    {
        // Mise à jour de la propriété statique.
        self::$nombrePietons++;
    }

    public function __construct(float $longueur, float $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
}

$pont = new Pont(286.0, 15.0);

var_dump($pont);

$surface = $pont->getSurface();

var_dump($surface);

$towerBridge = new Pont(286.0, 62.0);
var_dump($towerBridge);

echo '<p>' . $towerBridge->getSurface() . '</p>';

$manhattanBridge = new Pont(2089.0, 36.6);

$towerBridgeSurface = $towerBridge->getSurface();
$manhattanBridgeSurface = $manhattanBridge->getSurface();

var_dump($towerBridgeSurface);
var_dump($manhattanBridgeSurface);

echo '<p>' . $towerBridgeSurface . '</p>';

var_dump(Pont::validerTaille(150.0));

$pontLondres = new Pont(244.0, 61.0);
$pontLondres->nouveauPieton();

$pontManhattan = new Pont(2089.0, 36.6);
$pontManhattan->nouveauPieton();

echo '<p>' . Pont::$nombrePietons . '</p>';
