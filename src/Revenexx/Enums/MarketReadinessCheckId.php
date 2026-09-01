<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessCheckId implements JsonSerializable
{
    private static MarketReadinessCheckId $LOCALES;
    private static MarketReadinessCheckId $CURRENCIES;
    private static MarketReadinessCheckId $TAXCLASSES;
    private static MarketReadinessCheckId $TAXBASIS;

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

    public static function LOCALES(): MarketReadinessCheckId
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new MarketReadinessCheckId('locales');
        }
        return self::$LOCALES;
    }
    public static function CURRENCIES(): MarketReadinessCheckId
    {
        if (!isset(self::$CURRENCIES)) {
            self::$CURRENCIES = new MarketReadinessCheckId('currencies');
        }
        return self::$CURRENCIES;
    }
    public static function TAXCLASSES(): MarketReadinessCheckId
    {
        if (!isset(self::$TAXCLASSES)) {
            self::$TAXCLASSES = new MarketReadinessCheckId('tax_classes');
        }
        return self::$TAXCLASSES;
    }
    public static function TAXBASIS(): MarketReadinessCheckId
    {
        if (!isset(self::$TAXBASIS)) {
            self::$TAXBASIS = new MarketReadinessCheckId('tax_basis');
        }
        return self::$TAXBASIS;
    }
}