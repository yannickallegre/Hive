<?php

/**
 * Retourne la valeur de la crypto monnaie
 * en équivalent Bitcoin au format JSON
 */
interface CryptoValueJsonExporter
{
    public function getPriceAsJSON();
}
