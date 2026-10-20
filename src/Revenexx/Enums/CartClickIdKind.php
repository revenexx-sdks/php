<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartClickIdKind implements JsonSerializable
{
    private static CartClickIdKind $GCLID;
    private static CartClickIdKind $FBCLID;
    private static CartClickIdKind $LIFATID;
    private static CartClickIdKind $MSCLKID;

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

    public static function GCLID(): CartClickIdKind
    {
        if (!isset(self::$GCLID)) {
            self::$GCLID = new CartClickIdKind('gclid');
        }
        return self::$GCLID;
    }
    public static function FBCLID(): CartClickIdKind
    {
        if (!isset(self::$FBCLID)) {
            self::$FBCLID = new CartClickIdKind('fbclid');
        }
        return self::$FBCLID;
    }
    public static function LIFATID(): CartClickIdKind
    {
        if (!isset(self::$LIFATID)) {
            self::$LIFATID = new CartClickIdKind('li_fat_id');
        }
        return self::$LIFATID;
    }
    public static function MSCLKID(): CartClickIdKind
    {
        if (!isset(self::$MSCLKID)) {
            self::$MSCLKID = new CartClickIdKind('msclkid');
        }
        return self::$MSCLKID;
    }
}