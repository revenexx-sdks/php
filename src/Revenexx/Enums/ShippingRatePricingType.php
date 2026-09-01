<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingRatePricingType implements JsonSerializable
{
    private static ShippingRatePricingType $FIXED;
    private static ShippingRatePricingType $FREE;
    private static ShippingRatePricingType $MATRIX;

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

    public static function FIXED(): ShippingRatePricingType
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new ShippingRatePricingType('fixed');
        }
        return self::$FIXED;
    }
    public static function FREE(): ShippingRatePricingType
    {
        if (!isset(self::$FREE)) {
            self::$FREE = new ShippingRatePricingType('free');
        }
        return self::$FREE;
    }
    public static function MATRIX(): ShippingRatePricingType
    {
        if (!isset(self::$MATRIX)) {
            self::$MATRIX = new ShippingRatePricingType('matrix');
        }
        return self::$MATRIX;
    }
}