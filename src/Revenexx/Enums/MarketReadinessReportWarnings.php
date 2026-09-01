<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessReportWarnings implements JsonSerializable
{
    private static MarketReadinessReportWarnings $LOCALES;
    private static MarketReadinessReportWarnings $CURRENCIES;
    private static MarketReadinessReportWarnings $TAXCLASSES;
    private static MarketReadinessReportWarnings $TAXBASIS;

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

    public static function LOCALES(): MarketReadinessReportWarnings
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new MarketReadinessReportWarnings('locales');
        }
        return self::$LOCALES;
    }
    public static function CURRENCIES(): MarketReadinessReportWarnings
    {
        if (!isset(self::$CURRENCIES)) {
            self::$CURRENCIES = new MarketReadinessReportWarnings('currencies');
        }
        return self::$CURRENCIES;
    }
    public static function TAXCLASSES(): MarketReadinessReportWarnings
    {
        if (!isset(self::$TAXCLASSES)) {
            self::$TAXCLASSES = new MarketReadinessReportWarnings('tax_classes');
        }
        return self::$TAXCLASSES;
    }
    public static function TAXBASIS(): MarketReadinessReportWarnings
    {
        if (!isset(self::$TAXBASIS)) {
            self::$TAXBASIS = new MarketReadinessReportWarnings('tax_basis');
        }
        return self::$TAXBASIS;
    }
}