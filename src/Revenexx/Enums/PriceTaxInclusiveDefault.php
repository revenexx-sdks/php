<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceTaxInclusiveDefault implements JsonSerializable
{
    private static PriceTaxInclusiveDefault $NET;
    private static PriceTaxInclusiveDefault $GROSS;

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

    public static function NET(): PriceTaxInclusiveDefault
    {
        if (!isset(self::$NET)) {
            self::$NET = new PriceTaxInclusiveDefault('net');
        }
        return self::$NET;
    }
    public static function GROSS(): PriceTaxInclusiveDefault
    {
        if (!isset(self::$GROSS)) {
            self::$GROSS = new PriceTaxInclusiveDefault('gross');
        }
        return self::$GROSS;
    }
}