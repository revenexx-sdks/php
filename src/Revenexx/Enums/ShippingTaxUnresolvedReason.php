<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingTaxUnresolvedReason implements JsonSerializable
{
    private static ShippingTaxUnresolvedReason $MARKETREQUIRED;
    private static ShippingTaxUnresolvedReason $NOMARKETS;
    private static ShippingTaxUnresolvedReason $NOTAXCLASSES;
    private static ShippingTaxUnresolvedReason $LOOKUPFAILED;

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

    public static function MARKETREQUIRED(): ShippingTaxUnresolvedReason
    {
        if (!isset(self::$MARKETREQUIRED)) {
            self::$MARKETREQUIRED = new ShippingTaxUnresolvedReason('market_required');
        }
        return self::$MARKETREQUIRED;
    }
    public static function NOMARKETS(): ShippingTaxUnresolvedReason
    {
        if (!isset(self::$NOMARKETS)) {
            self::$NOMARKETS = new ShippingTaxUnresolvedReason('no_markets');
        }
        return self::$NOMARKETS;
    }
    public static function NOTAXCLASSES(): ShippingTaxUnresolvedReason
    {
        if (!isset(self::$NOTAXCLASSES)) {
            self::$NOTAXCLASSES = new ShippingTaxUnresolvedReason('no_tax_classes');
        }
        return self::$NOTAXCLASSES;
    }
    public static function LOOKUPFAILED(): ShippingTaxUnresolvedReason
    {
        if (!isset(self::$LOOKUPFAILED)) {
            self::$LOOKUPFAILED = new ShippingTaxUnresolvedReason('lookup_failed');
        }
        return self::$LOOKUPFAILED;
    }
}