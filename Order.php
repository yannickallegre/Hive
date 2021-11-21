<?php

interface ShippingType
{
    /**
     * @throws InvalidShippingCost
     */
    public function getCost(Order $order) : float;
}

class SubShippingType implements ShippingType
{
    public function getCost(Order $order) : float
    {
        /*...*/
        return 0.0;
    }
}

class AircraftShipping implements ShippingType
{
    public function getCost(Order $order) : float
    {
        /*...*/
        return 0.0;
    }
}

class TrainShpping implements ShippingType
{
    public function getCost(Order $order) : float
    {
        /*...*/
        return 0.0;
    }
}

class TooHeavyOrderException extends InvalidShippingCostException {}

class DroneShipping implements ShippingType
{
    public function getCost(Order $order) : float
    {
        if ($order->getWeight() > 10) {
            throw new TooHeavyOrderException();
        }

        $cost = $order->getWeight() * 3;

        if ($order->getPlan() == 'rapide') {
            $cost = 1.3 * $cost;
        }

        return (float) $cost;
    }
}

class ParentOrder {}

class Order extends ParentOrder
{
    // eco ou rapide
    private $shppingPlan;

    // en kg
    private $orderWeight;

    // avion ou train par exemple
    private $shppingMode;
    private $shippingType;
    /*...*/

    public function getShippingCost()
    {
        return $this->shippingType->getCost();
    }

    public function __construct(ShippingType $shippingType)
    {
        $this->shippingType = $shippingType;
    }
}

class SubOrder extends Order {}

interface Cart
{
    public function getShippingCost(Order $order) : ShippingType;
    public function getOrder(ShippingType $type) : Order;
}

// Bonne idée!
class SubCart implements Cart
{
    public function getShippingCost(ParentOrder $order) : ShippingType
    {
        /*...*/
        return new ShippingType();
    }

    public function getOrder(ShippingType $type) : Order
    {
        /*...*/
        return new Order();
    }
}

class InvalidShippingCostException extends \Exception {}
class BadFormattedCostException extends InvalidShippingCostException {}
class WrongShippingMethodException extends \Exception {}
