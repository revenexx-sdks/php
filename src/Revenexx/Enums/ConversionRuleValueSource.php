<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionRuleValueSource implements JsonSerializable
{
    private static ConversionRuleValueSource $ORDERNET;
    private static ConversionRuleValueSource $ORDERGROSS;
    private static ConversionRuleValueSource $FIXED;
    private static ConversionRuleValueSource $NONE;

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

    public static function ORDERNET(): ConversionRuleValueSource
    {
        if (!isset(self::$ORDERNET)) {
            self::$ORDERNET = new ConversionRuleValueSource('order_net');
        }
        return self::$ORDERNET;
    }
    public static function ORDERGROSS(): ConversionRuleValueSource
    {
        if (!isset(self::$ORDERGROSS)) {
            self::$ORDERGROSS = new ConversionRuleValueSource('order_gross');
        }
        return self::$ORDERGROSS;
    }
    public static function FIXED(): ConversionRuleValueSource
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new ConversionRuleValueSource('fixed');
        }
        return self::$FIXED;
    }
    public static function NONE(): ConversionRuleValueSource
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ConversionRuleValueSource('none');
        }
        return self::$NONE;
    }
}