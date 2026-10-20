<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionRuleWriteValueSource implements JsonSerializable
{
    private static ConversionRuleWriteValueSource $ORDERNET;
    private static ConversionRuleWriteValueSource $ORDERGROSS;
    private static ConversionRuleWriteValueSource $FIXED;
    private static ConversionRuleWriteValueSource $NONE;

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

    public static function ORDERNET(): ConversionRuleWriteValueSource
    {
        if (!isset(self::$ORDERNET)) {
            self::$ORDERNET = new ConversionRuleWriteValueSource('order_net');
        }
        return self::$ORDERNET;
    }
    public static function ORDERGROSS(): ConversionRuleWriteValueSource
    {
        if (!isset(self::$ORDERGROSS)) {
            self::$ORDERGROSS = new ConversionRuleWriteValueSource('order_gross');
        }
        return self::$ORDERGROSS;
    }
    public static function FIXED(): ConversionRuleWriteValueSource
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new ConversionRuleWriteValueSource('fixed');
        }
        return self::$FIXED;
    }
    public static function NONE(): ConversionRuleWriteValueSource
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ConversionRuleWriteValueSource('none');
        }
        return self::$NONE;
    }
}