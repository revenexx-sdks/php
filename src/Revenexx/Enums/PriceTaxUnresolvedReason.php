<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceTaxUnresolvedReason implements JsonSerializable
{
    private static PriceTaxUnresolvedReason $MARKETREQUIRED;
    private static PriceTaxUnresolvedReason $NOMARKETS;
    private static PriceTaxUnresolvedReason $NOTAXCLASSES;
    private static PriceTaxUnresolvedReason $LOOKUPFAILED;

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

    public static function MARKETREQUIRED(): PriceTaxUnresolvedReason
    {
        if (!isset(self::$MARKETREQUIRED)) {
            self::$MARKETREQUIRED = new PriceTaxUnresolvedReason('market_required');
        }
        return self::$MARKETREQUIRED;
    }
    public static function NOMARKETS(): PriceTaxUnresolvedReason
    {
        if (!isset(self::$NOMARKETS)) {
            self::$NOMARKETS = new PriceTaxUnresolvedReason('no_markets');
        }
        return self::$NOMARKETS;
    }
    public static function NOTAXCLASSES(): PriceTaxUnresolvedReason
    {
        if (!isset(self::$NOTAXCLASSES)) {
            self::$NOTAXCLASSES = new PriceTaxUnresolvedReason('no_tax_classes');
        }
        return self::$NOTAXCLASSES;
    }
    public static function LOOKUPFAILED(): PriceTaxUnresolvedReason
    {
        if (!isset(self::$LOOKUPFAILED)) {
            self::$LOOKUPFAILED = new PriceTaxUnresolvedReason('lookup_failed');
        }
        return self::$LOOKUPFAILED;
    }
}