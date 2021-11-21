<?php

require_once('PaymentMethodInterface.php');

final class ByCheck implements PaymentMethodInterface
{
    public function execute(CartInterface $cart)
    {
        // ...
    }
}
