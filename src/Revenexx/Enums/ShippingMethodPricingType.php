<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingMethodPricingType implements JsonSerializable
{
    private static ShippingMethodPricingType $FIXED;
    private static ShippingMethodPricingType $FREE;
    private static ShippingMethodPricingType $MATRIX;

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

    public static function FIXED(): ShippingMethodPricingType
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new ShippingMethodPricingType('fixed');
        }
        return self::$FIXED;
    }
    public static function FREE(): ShippingMethodPricingType
    {
        if (!isset(self::$FREE)) {
            self::$FREE = new ShippingMethodPricingType('free');
        }
        return self::$FREE;
    }
    public static function MATRIX(): ShippingMethodPricingType
    {
        if (!isset(self::$MATRIX)) {
            self::$MATRIX = new ShippingMethodPricingType('matrix');
        }
        return self::$MATRIX;
    }
}