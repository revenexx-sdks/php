<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderDiscountValueType implements JsonSerializable
{
    private static OrderDiscountValueType $PERCENTAGE;
    private static OrderDiscountValueType $AMOUNT;
    private static OrderDiscountValueType $FIXEDPRICE;

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

    public static function PERCENTAGE(): OrderDiscountValueType
    {
        if (!isset(self::$PERCENTAGE)) {
            self::$PERCENTAGE = new OrderDiscountValueType('percentage');
        }
        return self::$PERCENTAGE;
    }
    public static function AMOUNT(): OrderDiscountValueType
    {
        if (!isset(self::$AMOUNT)) {
            self::$AMOUNT = new OrderDiscountValueType('amount');
        }
        return self::$AMOUNT;
    }
    public static function FIXEDPRICE(): OrderDiscountValueType
    {
        if (!isset(self::$FIXEDPRICE)) {
            self::$FIXEDPRICE = new OrderDiscountValueType('fixed_price');
        }
        return self::$FIXEDPRICE;
    }
}