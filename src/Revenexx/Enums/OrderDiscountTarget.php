<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderDiscountTarget implements JsonSerializable
{
    private static OrderDiscountTarget $ITEM;
    private static OrderDiscountTarget $SHIPPING;
    private static OrderDiscountTarget $PAYMENTFEE;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function ITEM(): OrderDiscountTarget
    {
        if (!isset(self::$ITEM)) {
            self::$ITEM = new OrderDiscountTarget('item');
        }
        return self::$ITEM;
    }
    public static function SHIPPING(): OrderDiscountTarget
    {
        if (!isset(self::$SHIPPING)) {
            self::$SHIPPING = new OrderDiscountTarget('shipping');
        }
        return self::$SHIPPING;
    }
    public static function PAYMENTFEE(): OrderDiscountTarget
    {
        if (!isset(self::$PAYMENTFEE)) {
            self::$PAYMENTFEE = new OrderDiscountTarget('payment_fee');
        }
        return self::$PAYMENTFEE;
    }
}