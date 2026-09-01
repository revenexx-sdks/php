<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceRoundingMode implements JsonSerializable
{
    private static PriceRoundingMode $HALFUP;
    private static PriceRoundingMode $HALFEVEN;
    private static PriceRoundingMode $UP;
    private static PriceRoundingMode $DOWN;

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

    public static function HALFUP(): PriceRoundingMode
    {
        if (!isset(self::$HALFUP)) {
            self::$HALFUP = new PriceRoundingMode('half_up');
        }
        return self::$HALFUP;
    }
    public static function HALFEVEN(): PriceRoundingMode
    {
        if (!isset(self::$HALFEVEN)) {
            self::$HALFEVEN = new PriceRoundingMode('half_even');
        }
        return self::$HALFEVEN;
    }
    public static function UP(): PriceRoundingMode
    {
        if (!isset(self::$UP)) {
            self::$UP = new PriceRoundingMode('up');
        }
        return self::$UP;
    }
    public static function DOWN(): PriceRoundingMode
    {
        if (!isset(self::$DOWN)) {
            self::$DOWN = new PriceRoundingMode('down');
        }
        return self::$DOWN;
    }
}