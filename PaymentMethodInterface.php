<?php

require_once('Customer.php');

interface PaymentMethodInterface
{
    public function execute(CartInterface $cart);
}
