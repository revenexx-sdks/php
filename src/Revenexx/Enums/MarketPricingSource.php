<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketPricingSource implements JsonSerializable
{
    private static MarketPricingSource $MARKET;
    private static MarketPricingSource $TENANT;
    private static MarketPricingSource $UNSET;

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

    public static function MARKET(): MarketPricingSource
    {
        if (!isset(self::$MARKET)) {
            self::$MARKET = new MarketPricingSource('market');
        }
        return self::$MARKET;
    }
    public static function TENANT(): MarketPricingSource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new MarketPricingSource('tenant');
        }
        return self::$TENANT;
    }
    public static function UNSET(): MarketPricingSource
    {
        if (!isset(self::$UNSET)) {
            self::$UNSET = new MarketPricingSource('unset');
        }
        return self::$UNSET;
    }
}