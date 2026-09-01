<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceCurrencySource implements JsonSerializable
{
    private static PriceCurrencySource $REQUEST;
    private static PriceCurrencySource $MARKET;
    private static PriceCurrencySource $TENANT;
    private static PriceCurrencySource $FALLBACK;

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

    public static function REQUEST(): PriceCurrencySource
    {
        if (!isset(self::$REQUEST)) {
            self::$REQUEST = new PriceCurrencySource('request');
        }
        return self::$REQUEST;
    }
    public static function MARKET(): PriceCurrencySource
    {
        if (!isset(self::$MARKET)) {
            self::$MARKET = new PriceCurrencySource('market');
        }
        return self::$MARKET;
    }
    public static function TENANT(): PriceCurrencySource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new PriceCurrencySource('tenant');
        }
        return self::$TENANT;
    }
    public static function FALLBACK(): PriceCurrencySource
    {
        if (!isset(self::$FALLBACK)) {
            self::$FALLBACK = new PriceCurrencySource('fallback');
        }
        return self::$FALLBACK;
    }
}