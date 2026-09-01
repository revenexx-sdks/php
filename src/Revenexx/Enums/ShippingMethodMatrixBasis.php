<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingMethodMatrixBasis implements JsonSerializable
{
    private static ShippingMethodMatrixBasis $WEIGHT;
    private static ShippingMethodMatrixBasis $QUANTITY;
    private static ShippingMethodMatrixBasis $ORDERVALUE;
    private static ShippingMethodMatrixBasis $ATTRIBUTE;

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

    public static function WEIGHT(): ShippingMethodMatrixBasis
    {
        if (!isset(self::$WEIGHT)) {
            self::$WEIGHT = new ShippingMethodMatrixBasis('weight');
        }
        return self::$WEIGHT;
    }
    public static function QUANTITY(): ShippingMethodMatrixBasis
    {
        if (!isset(self::$QUANTITY)) {
            self::$QUANTITY = new ShippingMethodMatrixBasis('quantity');
        }
        return self::$QUANTITY;
    }
    public static function ORDERVALUE(): ShippingMethodMatrixBasis
    {
        if (!isset(self::$ORDERVALUE)) {
            self::$ORDERVALUE = new ShippingMethodMatrixBasis('order_value');
        }
        return self::$ORDERVALUE;
    }
    public static function ATTRIBUTE(): ShippingMethodMatrixBasis
    {
        if (!isset(self::$ATTRIBUTE)) {
            self::$ATTRIBUTE = new ShippingMethodMatrixBasis('attribute');
        }
        return self::$ATTRIBUTE;
    }
}