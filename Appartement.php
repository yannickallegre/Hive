<?php

require('Logement.php');

class Appartement extends Logement
{
    // Cette classe comporte automatiquement les variables ($porte, $temperature...) et les fonctions (ouvrirPorte...) de la classe parente

    private $etage; // Seuls les appartements sont situés à un étage précis. On définit donc cette variable ici.
}
