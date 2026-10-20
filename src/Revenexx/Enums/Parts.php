<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Parts implements JsonSerializable
{
    private static Parts $PRICES;

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

    public static function PRICES(): Parts
    {
        if (!isset(self::$PRICES)) {
            self::$PRICES = new Parts('prices');
        }
        return self::$PRICES;
    }
}