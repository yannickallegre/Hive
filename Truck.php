<?php

require_once('Transport.php');

class Truck implements Transport
{
    /**
     * Chaque type de transport a ses spécifités de livraison
     */
    public function deliverOrder()
    {
        // ...
    }

    // et toutes les autres méthodes utiles à cet objet
}
