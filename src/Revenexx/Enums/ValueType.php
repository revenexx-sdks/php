<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ValueType implements JsonSerializable
{
    private static ValueType $PERCENTAGE;
    private static ValueType $AMOUNT;
    private static ValueType $FIXEDPRICE;

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

    public static function PERCENTAGE(): ValueType
    {
        if (!isset(self::$PERCENTAGE)) {
            self::$PERCENTAGE = new ValueType('percentage');
        }
        return self::$PERCENTAGE;
    }
    public static function AMOUNT(): ValueType
    {
        if (!isset(self::$AMOUNT)) {
            self::$AMOUNT = new ValueType('amount');
        }
        return self::$AMOUNT;
    }
    public static function FIXEDPRICE(): ValueType
    {
        if (!isset(self::$FIXEDPRICE)) {
            self::$FIXEDPRICE = new ValueType('fixed_price');
        }
        return self::$FIXEDPRICE;
    }
}