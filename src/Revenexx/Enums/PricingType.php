<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PricingType implements JsonSerializable
{
    private static PricingType $FIXED;
    private static PricingType $FREE;
    private static PricingType $MATRIX;

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

    public static function FIXED(): PricingType
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new PricingType('fixed');
        }
        return self::$FIXED;
    }
    public static function FREE(): PricingType
    {
        if (!isset(self::$FREE)) {
            self::$FREE = new PricingType('free');
        }
        return self::$FREE;
    }
    public static function MATRIX(): PricingType
    {
        if (!isset(self::$MATRIX)) {
            self::$MATRIX = new PricingType('matrix');
        }
        return self::$MATRIX;
    }
}