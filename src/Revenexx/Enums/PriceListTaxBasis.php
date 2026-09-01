<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceListTaxBasis implements JsonSerializable
{
    private static PriceListTaxBasis $NET;
    private static PriceListTaxBasis $GROSS;

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

    public static function NET(): PriceListTaxBasis
    {
        if (!isset(self::$NET)) {
            self::$NET = new PriceListTaxBasis('net');
        }
        return self::$NET;
    }
    public static function GROSS(): PriceListTaxBasis
    {
        if (!isset(self::$GROSS)) {
            self::$GROSS = new PriceListTaxBasis('gross');
        }
        return self::$GROSS;
    }
}