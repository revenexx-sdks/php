<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketDefaultLocaleSource implements JsonSerializable
{
    private static MarketDefaultLocaleSource $MARKET;
    private static MarketDefaultLocaleSource $MARKETFIRST;
    private static MarketDefaultLocaleSource $TENANTFALLBACK;

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

    public static function MARKET(): MarketDefaultLocaleSource
    {
        if (!isset(self::$MARKET)) {
            self::$MARKET = new MarketDefaultLocaleSource('market');
        }
        return self::$MARKET;
    }
    public static function MARKETFIRST(): MarketDefaultLocaleSource
    {
        if (!isset(self::$MARKETFIRST)) {
            self::$MARKETFIRST = new MarketDefaultLocaleSource('market_first');
        }
        return self::$MARKETFIRST;
    }
    public static function TENANTFALLBACK(): MarketDefaultLocaleSource
    {
        if (!isset(self::$TENANTFALLBACK)) {
            self::$TENANTFALLBACK = new MarketDefaultLocaleSource('tenant_fallback');
        }
        return self::$TENANTFALLBACK;
    }
}