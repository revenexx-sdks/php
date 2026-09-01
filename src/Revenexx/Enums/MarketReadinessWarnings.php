<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessWarnings implements JsonSerializable
{
    private static MarketReadinessWarnings $LOCALES;
    private static MarketReadinessWarnings $CURRENCIES;
    private static MarketReadinessWarnings $TAXCLASSES;
    private static MarketReadinessWarnings $TAXBASIS;

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

    public static function LOCALES(): MarketReadinessWarnings
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new MarketReadinessWarnings('locales');
        }
        return self::$LOCALES;
    }
    public static function CURRENCIES(): MarketReadinessWarnings
    {
        if (!isset(self::$CURRENCIES)) {
            self::$CURRENCIES = new MarketReadinessWarnings('currencies');
        }
        return self::$CURRENCIES;
    }
    public static function TAXCLASSES(): MarketReadinessWarnings
    {
        if (!isset(self::$TAXCLASSES)) {
            self::$TAXCLASSES = new MarketReadinessWarnings('tax_classes');
        }
        return self::$TAXCLASSES;
    }
    public static function TAXBASIS(): MarketReadinessWarnings
    {
        if (!isset(self::$TAXBASIS)) {
            self::$TAXBASIS = new MarketReadinessWarnings('tax_basis');
        }
        return self::$TAXBASIS;
    }
}