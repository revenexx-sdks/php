<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionRulePatchValueSource implements JsonSerializable
{
    private static ConversionRulePatchValueSource $ORDERNET;
    private static ConversionRulePatchValueSource $ORDERGROSS;
    private static ConversionRulePatchValueSource $FIXED;
    private static ConversionRulePatchValueSource $NONE;

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

    public static function ORDERNET(): ConversionRulePatchValueSource
    {
        if (!isset(self::$ORDERNET)) {
            self::$ORDERNET = new ConversionRulePatchValueSource('order_net');
        }
        return self::$ORDERNET;
    }
    public static function ORDERGROSS(): ConversionRulePatchValueSource
    {
        if (!isset(self::$ORDERGROSS)) {
            self::$ORDERGROSS = new ConversionRulePatchValueSource('order_gross');
        }
        return self::$ORDERGROSS;
    }
    public static function FIXED(): ConversionRulePatchValueSource
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new ConversionRulePatchValueSource('fixed');
        }
        return self::$FIXED;
    }
    public static function NONE(): ConversionRulePatchValueSource
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ConversionRulePatchValueSource('none');
        }
        return self::$NONE;
    }
}