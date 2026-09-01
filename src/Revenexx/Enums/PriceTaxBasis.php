<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceTaxBasis implements JsonSerializable
{
    private static PriceTaxBasis $NET;
    private static PriceTaxBasis $GROSS;

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

    public static function NET(): PriceTaxBasis
    {
        if (!isset(self::$NET)) {
            self::$NET = new PriceTaxBasis('net');
        }
        return self::$NET;
    }
    public static function GROSS(): PriceTaxBasis
    {
        if (!isset(self::$GROSS)) {
            self::$GROSS = new PriceTaxBasis('gross');
        }
        return self::$GROSS;
    }
}