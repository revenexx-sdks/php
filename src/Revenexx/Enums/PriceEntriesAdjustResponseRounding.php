<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceEntriesAdjustResponseRounding implements JsonSerializable
{
    private static PriceEntriesAdjustResponseRounding $EXACT;
    private static PriceEntriesAdjustResponseRounding $WHOLE;
    private static PriceEntriesAdjustResponseRounding $ENDING99;
    private static PriceEntriesAdjustResponseRounding $ENDING95;
    private static PriceEntriesAdjustResponseRounding $ENDING50;

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

    public static function EXACT(): PriceEntriesAdjustResponseRounding
    {
        if (!isset(self::$EXACT)) {
            self::$EXACT = new PriceEntriesAdjustResponseRounding('exact');
        }
        return self::$EXACT;
    }
    public static function WHOLE(): PriceEntriesAdjustResponseRounding
    {
        if (!isset(self::$WHOLE)) {
            self::$WHOLE = new PriceEntriesAdjustResponseRounding('whole');
        }
        return self::$WHOLE;
    }
    public static function ENDING99(): PriceEntriesAdjustResponseRounding
    {
        if (!isset(self::$ENDING99)) {
            self::$ENDING99 = new PriceEntriesAdjustResponseRounding('ending_99');
        }
        return self::$ENDING99;
    }
    public static function ENDING95(): PriceEntriesAdjustResponseRounding
    {
        if (!isset(self::$ENDING95)) {
            self::$ENDING95 = new PriceEntriesAdjustResponseRounding('ending_95');
        }
        return self::$ENDING95;
    }
    public static function ENDING50(): PriceEntriesAdjustResponseRounding
    {
        if (!isset(self::$ENDING50)) {
            self::$ENDING50 = new PriceEntriesAdjustResponseRounding('ending_50');
        }
        return self::$ENDING50;
    }
}