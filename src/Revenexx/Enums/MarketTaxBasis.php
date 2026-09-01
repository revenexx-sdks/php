<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketTaxBasis implements JsonSerializable
{
    private static MarketTaxBasis $NET;
    private static MarketTaxBasis $GROSS;

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

    public static function NET(): MarketTaxBasis
    {
        if (!isset(self::$NET)) {
            self::$NET = new MarketTaxBasis('net');
        }
        return self::$NET;
    }
    public static function GROSS(): MarketTaxBasis
    {
        if (!isset(self::$GROSS)) {
            self::$GROSS = new MarketTaxBasis('gross');
        }
        return self::$GROSS;
    }
}