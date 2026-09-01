<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceTaxMarketSource implements JsonSerializable
{
    private static PriceTaxMarketSource $REQUEST;
    private static PriceTaxMarketSource $HEADER;
    private static PriceTaxMarketSource $SOLEMARKET;

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

    public static function REQUEST(): PriceTaxMarketSource
    {
        if (!isset(self::$REQUEST)) {
            self::$REQUEST = new PriceTaxMarketSource('request');
        }
        return self::$REQUEST;
    }
    public static function HEADER(): PriceTaxMarketSource
    {
        if (!isset(self::$HEADER)) {
            self::$HEADER = new PriceTaxMarketSource('header');
        }
        return self::$HEADER;
    }
    public static function SOLEMARKET(): PriceTaxMarketSource
    {
        if (!isset(self::$SOLEMARKET)) {
            self::$SOLEMARKET = new PriceTaxMarketSource('sole_market');
        }
        return self::$SOLEMARKET;
    }
}