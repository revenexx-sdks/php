<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessBlocking implements JsonSerializable
{
    private static MarketReadinessBlocking $LOCALES;
    private static MarketReadinessBlocking $CURRENCIES;
    private static MarketReadinessBlocking $TAXCLASSES;
    private static MarketReadinessBlocking $TAXBASIS;

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

    public static function LOCALES(): MarketReadinessBlocking
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new MarketReadinessBlocking('locales');
        }
        return self::$LOCALES;
    }
    public static function CURRENCIES(): MarketReadinessBlocking
    {
        if (!isset(self::$CURRENCIES)) {
            self::$CURRENCIES = new MarketReadinessBlocking('currencies');
        }
        return self::$CURRENCIES;
    }
    public static function TAXCLASSES(): MarketReadinessBlocking
    {
        if (!isset(self::$TAXCLASSES)) {
            self::$TAXCLASSES = new MarketReadinessBlocking('tax_classes');
        }
        return self::$TAXCLASSES;
    }
    public static function TAXBASIS(): MarketReadinessBlocking
    {
        if (!isset(self::$TAXBASIS)) {
            self::$TAXBASIS = new MarketReadinessBlocking('tax_basis');
        }
        return self::$TAXBASIS;
    }
}