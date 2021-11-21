<?php

use OC\CryptoCurrency\SuccessCoin;
require_once('CryptoValueJsonExporter.php');

class SuccessCoinAdapter implements CryptoValueJsonExporter
{
    private $coin;

    public function __construct(SuccessCoin $successCoin)
    {
        $this->coin = $successCoin;
    }

    public function getPriceAsJSON()
    {
        $resultInXML = $this->coin->export();
        // fonction de transformation à créer
        return $this->convertXMLtoJson($resultInXML);
    }
}
