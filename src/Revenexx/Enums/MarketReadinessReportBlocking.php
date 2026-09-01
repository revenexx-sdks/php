<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessReportBlocking implements JsonSerializable
{
    private static MarketReadinessReportBlocking $LOCALES;
    private static MarketReadinessReportBlocking $CURRENCIES;
    private static MarketReadinessReportBlocking $TAXCLASSES;
    private static MarketReadinessReportBlocking $TAXBASIS;

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

    public static function LOCALES(): MarketReadinessReportBlocking
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new MarketReadinessReportBlocking('locales');
        }
        return self::$LOCALES;
    }
    public static function CURRENCIES(): MarketReadinessReportBlocking
    {
        if (!isset(self::$CURRENCIES)) {
            self::$CURRENCIES = new MarketReadinessReportBlocking('currencies');
        }
        return self::$CURRENCIES;
    }
    public static function TAXCLASSES(): MarketReadinessReportBlocking
    {
        if (!isset(self::$TAXCLASSES)) {
            self::$TAXCLASSES = new MarketReadinessReportBlocking('tax_classes');
        }
        return self::$TAXCLASSES;
    }
    public static function TAXBASIS(): MarketReadinessReportBlocking
    {
        if (!isset(self::$TAXBASIS)) {
            self::$TAXBASIS = new MarketReadinessReportBlocking('tax_basis');
        }
        return self::$TAXBASIS;
    }
}