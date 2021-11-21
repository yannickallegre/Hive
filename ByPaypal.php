<?php

require_once('PaymentMethodInterface.php');

final class ByPaypal implements PaymentMethodInterface
{
    public function execute(CartInterface $cart)
    {
        // ...
    }
}

$customer = new Customer();
