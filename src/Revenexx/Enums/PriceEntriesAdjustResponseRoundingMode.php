<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceEntriesAdjustResponseRoundingMode implements JsonSerializable
{
    private static PriceEntriesAdjustResponseRoundingMode $HALFUP;
    private static PriceEntriesAdjustResponseRoundingMode $HALFEVEN;
    private static PriceEntriesAdjustResponseRoundingMode $UP;
    private static PriceEntriesAdjustResponseRoundingMode $DOWN;

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

    public static function HALFUP(): PriceEntriesAdjustResponseRoundingMode
    {
        if (!isset(self::$HALFUP)) {
            self::$HALFUP = new PriceEntriesAdjustResponseRoundingMode('half_up');
        }
        return self::$HALFUP;
    }
    public static function HALFEVEN(): PriceEntriesAdjustResponseRoundingMode
    {
        if (!isset(self::$HALFEVEN)) {
            self::$HALFEVEN = new PriceEntriesAdjustResponseRoundingMode('half_even');
        }
        return self::$HALFEVEN;
    }
    public static function UP(): PriceEntriesAdjustResponseRoundingMode
    {
        if (!isset(self::$UP)) {
            self::$UP = new PriceEntriesAdjustResponseRoundingMode('up');
        }
        return self::$UP;
    }
    public static function DOWN(): PriceEntriesAdjustResponseRoundingMode
    {
        if (!isset(self::$DOWN)) {
            self::$DOWN = new PriceEntriesAdjustResponseRoundingMode('down');
        }
        return self::$DOWN;
    }
}