<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessWarningReasons implements JsonSerializable
{
    private static MarketReadinessWarningReasons $LOCALES;
    private static MarketReadinessWarningReasons $LOCALESMISSING;
    private static MarketReadinessWarningReasons $CURRENCIES;
    private static MarketReadinessWarningReasons $TAXCLASSES;
    private static MarketReadinessWarningReasons $SHIPFROMCOUNTRY;

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

    public static function LOCALES(): MarketReadinessWarningReasons
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new MarketReadinessWarningReasons('locales');
        }
        return self::$LOCALES;
    }
    public static function LOCALESMISSING(): MarketReadinessWarningReasons
    {
        if (!isset(self::$LOCALESMISSING)) {
            self::$LOCALESMISSING = new MarketReadinessWarningReasons('locales_missing');
        }
        return self::$LOCALESMISSING;
    }
    public static function CURRENCIES(): MarketReadinessWarningReasons
    {
        if (!isset(self::$CURRENCIES)) {
            self::$CURRENCIES = new MarketReadinessWarningReasons('currencies');
        }
        return self::$CURRENCIES;
    }
    public static function TAXCLASSES(): MarketReadinessWarningReasons
    {
        if (!isset(self::$TAXCLASSES)) {
            self::$TAXCLASSES = new MarketReadinessWarningReasons('tax_classes');
        }
        return self::$TAXCLASSES;
    }
    public static function SHIPFROMCOUNTRY(): MarketReadinessWarningReasons
    {
        if (!isset(self::$SHIPFROMCOUNTRY)) {
            self::$SHIPFROMCOUNTRY = new MarketReadinessWarningReasons('ship_from_country');
        }
        return self::$SHIPFROMCOUNTRY;
    }
}
