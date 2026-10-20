<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Variant implements JsonSerializable
{
    private static Variant $LOGO;
    private static Variant $SYMBOL;

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

    public static function LOGO(): Variant
    {
        if (!isset(self::$LOGO)) {
            self::$LOGO = new Variant('logo');
        }
        return self::$LOGO;
    }
    public static function SYMBOL(): Variant
    {
        if (!isset(self::$SYMBOL)) {
            self::$SYMBOL = new Variant('symbol');
        }
        return self::$SYMBOL;
    }
}