<?php

require_once('PaymentMethodInterface.php');

final class Customer
{
    private $paymentMethod;

    public function setPaymentStrategy(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Effectue le paiement de la command
     */
    public function buy(CartInterface $cart)
    {
        return $this->paymentMethod->execute($cart);
    }
}
