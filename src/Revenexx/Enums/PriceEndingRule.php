<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceEndingRule implements JsonSerializable
{
    private static PriceEndingRule $EXACT;
    private static PriceEndingRule $WHOLE;
    private static PriceEndingRule $ENDING99;
    private static PriceEndingRule $ENDING95;
    private static PriceEndingRule $ENDING50;

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

    public static function EXACT(): PriceEndingRule
    {
        if (!isset(self::$EXACT)) {
            self::$EXACT = new PriceEndingRule('exact');
        }
        return self::$EXACT;
    }
    public static function WHOLE(): PriceEndingRule
    {
        if (!isset(self::$WHOLE)) {
            self::$WHOLE = new PriceEndingRule('whole');
        }
        return self::$WHOLE;
    }
    public static function ENDING99(): PriceEndingRule
    {
        if (!isset(self::$ENDING99)) {
            self::$ENDING99 = new PriceEndingRule('ending_99');
        }
        return self::$ENDING99;
    }
    public static function ENDING95(): PriceEndingRule
    {
        if (!isset(self::$ENDING95)) {
            self::$ENDING95 = new PriceEndingRule('ending_95');
        }
        return self::$ENDING95;
    }
    public static function ENDING50(): PriceEndingRule
    {
        if (!isset(self::$ENDING50)) {
            self::$ENDING50 = new PriceEndingRule('ending_50');
        }
        return self::$ENDING50;
    }
}