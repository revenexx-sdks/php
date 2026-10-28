<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessReportWarningReasons implements JsonSerializable
{
    private static MarketReadinessReportWarningReasons $LOCALES;
    private static MarketReadinessReportWarningReasons $LOCALESMISSING;
    private static MarketReadinessReportWarningReasons $CURRENCIES;
    private static MarketReadinessReportWarningReasons $TAXCLASSES;
    private static MarketReadinessReportWarningReasons $SHIPFROMCOUNTRY;

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

    public static function LOCALES(): MarketReadinessReportWarningReasons
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new MarketReadinessReportWarningReasons('locales');
        }
        return self::$LOCALES;
    }
    public static function LOCALESMISSING(): MarketReadinessReportWarningReasons
    {
        if (!isset(self::$LOCALESMISSING)) {
            self::$LOCALESMISSING = new MarketReadinessReportWarningReasons('locales_missing');
        }
        return self::$LOCALESMISSING;
    }
    public static function CURRENCIES(): MarketReadinessReportWarningReasons
    {
        if (!isset(self::$CURRENCIES)) {
            self::$CURRENCIES = new MarketReadinessReportWarningReasons('currencies');
        }
        return self::$CURRENCIES;
    }
    public static function TAXCLASSES(): MarketReadinessReportWarningReasons
    {
        if (!isset(self::$TAXCLASSES)) {
            self::$TAXCLASSES = new MarketReadinessReportWarningReasons('tax_classes');
        }
        return self::$TAXCLASSES;
    }
    public static function SHIPFROMCOUNTRY(): MarketReadinessReportWarningReasons
    {
        if (!isset(self::$SHIPFROMCOUNTRY)) {
            self::$SHIPFROMCOUNTRY = new MarketReadinessReportWarningReasons('ship_from_country');
        }
        return self::$SHIPFROMCOUNTRY;
    }
}
