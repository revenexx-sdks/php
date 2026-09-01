<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingRatesBasisMatrixBasisDefault implements JsonSerializable
{
    private static ShippingRatesBasisMatrixBasisDefault $WEIGHT;
    private static ShippingRatesBasisMatrixBasisDefault $QUANTITY;
    private static ShippingRatesBasisMatrixBasisDefault $ORDERVALUE;

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

    public static function WEIGHT(): ShippingRatesBasisMatrixBasisDefault
    {
        if (!isset(self::$WEIGHT)) {
            self::$WEIGHT = new ShippingRatesBasisMatrixBasisDefault('weight');
        }
        return self::$WEIGHT;
    }
    public static function QUANTITY(): ShippingRatesBasisMatrixBasisDefault
    {
        if (!isset(self::$QUANTITY)) {
            self::$QUANTITY = new ShippingRatesBasisMatrixBasisDefault('quantity');
        }
        return self::$QUANTITY;
    }
    public static function ORDERVALUE(): ShippingRatesBasisMatrixBasisDefault
    {
        if (!isset(self::$ORDERVALUE)) {
            self::$ORDERVALUE = new ShippingRatesBasisMatrixBasisDefault('order_value');
        }
        return self::$ORDERVALUE;
    }
}