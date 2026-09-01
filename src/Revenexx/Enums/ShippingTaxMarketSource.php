<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingTaxMarketSource implements JsonSerializable
{
    private static ShippingTaxMarketSource $REQUEST;
    private static ShippingTaxMarketSource $HEADER;
    private static ShippingTaxMarketSource $COUNTRY;
    private static ShippingTaxMarketSource $SOLEMARKET;

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

    public static function REQUEST(): ShippingTaxMarketSource
    {
        if (!isset(self::$REQUEST)) {
            self::$REQUEST = new ShippingTaxMarketSource('request');
        }
        return self::$REQUEST;
    }
    public static function HEADER(): ShippingTaxMarketSource
    {
        if (!isset(self::$HEADER)) {
            self::$HEADER = new ShippingTaxMarketSource('header');
        }
        return self::$HEADER;
    }
    public static function COUNTRY(): ShippingTaxMarketSource
    {
        if (!isset(self::$COUNTRY)) {
            self::$COUNTRY = new ShippingTaxMarketSource('country');
        }
        return self::$COUNTRY;
    }
    public static function SOLEMARKET(): ShippingTaxMarketSource
    {
        if (!isset(self::$SOLEMARKET)) {
            self::$SOLEMARKET = new ShippingTaxMarketSource('sole_market');
        }
        return self::$SOLEMARKET;
    }
}