<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingFreeAboveBasis implements JsonSerializable
{
    private static ShippingFreeAboveBasis $NET;
    private static ShippingFreeAboveBasis $GROSS;

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

    public static function NET(): ShippingFreeAboveBasis
    {
        if (!isset(self::$NET)) {
            self::$NET = new ShippingFreeAboveBasis('net');
        }
        return self::$NET;
    }
    public static function GROSS(): ShippingFreeAboveBasis
    {
        if (!isset(self::$GROSS)) {
            self::$GROSS = new ShippingFreeAboveBasis('gross');
        }
        return self::$GROSS;
    }
}