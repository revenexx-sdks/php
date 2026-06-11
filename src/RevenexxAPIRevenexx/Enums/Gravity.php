<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class Gravity implements JsonSerializable
{
    private static Gravity $CENTER;
    private static Gravity $TOPLEFT;
    private static Gravity $TOP;
    private static Gravity $TOPRIGHT;
    private static Gravity $LEFT;
    private static Gravity $RIGHT;
    private static Gravity $BOTTOMLEFT;
    private static Gravity $BOTTOM;
    private static Gravity $BOTTOMRIGHT;

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

    public static function CENTER(): Gravity
    {
        if (!isset(self::$CENTER)) {
            self::$CENTER = new Gravity('center');
        }
        return self::$CENTER;
    }
    public static function TOPLEFT(): Gravity
    {
        if (!isset(self::$TOPLEFT)) {
            self::$TOPLEFT = new Gravity('top-left');
        }
        return self::$TOPLEFT;
    }
    public static function TOP(): Gravity
    {
        if (!isset(self::$TOP)) {
            self::$TOP = new Gravity('top');
        }
        return self::$TOP;
    }
    public static function TOPRIGHT(): Gravity
    {
        if (!isset(self::$TOPRIGHT)) {
            self::$TOPRIGHT = new Gravity('top-right');
        }
        return self::$TOPRIGHT;
    }
    public static function LEFT(): Gravity
    {
        if (!isset(self::$LEFT)) {
            self::$LEFT = new Gravity('left');
        }
        return self::$LEFT;
    }
    public static function RIGHT(): Gravity
    {
        if (!isset(self::$RIGHT)) {
            self::$RIGHT = new Gravity('right');
        }
        return self::$RIGHT;
    }
    public static function BOTTOMLEFT(): Gravity
    {
        if (!isset(self::$BOTTOMLEFT)) {
            self::$BOTTOMLEFT = new Gravity('bottom-left');
        }
        return self::$BOTTOMLEFT;
    }
    public static function BOTTOM(): Gravity
    {
        if (!isset(self::$BOTTOM)) {
            self::$BOTTOM = new Gravity('bottom');
        }
        return self::$BOTTOM;
    }
    public static function BOTTOMRIGHT(): Gravity
    {
        if (!isset(self::$BOTTOMRIGHT)) {
            self::$BOTTOMRIGHT = new Gravity('bottom-right');
        }
        return self::$BOTTOMRIGHT;
    }
}