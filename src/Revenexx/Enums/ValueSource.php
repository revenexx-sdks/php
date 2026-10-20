<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ValueSource implements JsonSerializable
{
    private static ValueSource $ORDERNET;
    private static ValueSource $ORDERGROSS;
    private static ValueSource $FIXED;
    private static ValueSource $NONE;

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

    public static function ORDERNET(): ValueSource
    {
        if (!isset(self::$ORDERNET)) {
            self::$ORDERNET = new ValueSource('order_net');
        }
        return self::$ORDERNET;
    }
    public static function ORDERGROSS(): ValueSource
    {
        if (!isset(self::$ORDERGROSS)) {
            self::$ORDERGROSS = new ValueSource('order_gross');
        }
        return self::$ORDERGROSS;
    }
    public static function FIXED(): ValueSource
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new ValueSource('fixed');
        }
        return self::$FIXED;
    }
    public static function NONE(): ValueSource
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ValueSource('none');
        }
        return self::$NONE;
    }
}