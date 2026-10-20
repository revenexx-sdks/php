<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceListCopyRequestParts implements JsonSerializable
{
    private static PriceListCopyRequestParts $PRICES;

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

    public static function PRICES(): PriceListCopyRequestParts
    {
        if (!isset(self::$PRICES)) {
            self::$PRICES = new PriceListCopyRequestParts('prices');
        }
        return self::$PRICES;
    }
}