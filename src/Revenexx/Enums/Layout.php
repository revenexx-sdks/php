<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Layout implements JsonSerializable
{
    private static Layout $BOX;
    private static Layout $BAR;
    private static Layout $MODAL;

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

    public static function BOX(): Layout
    {
        if (!isset(self::$BOX)) {
            self::$BOX = new Layout('box');
        }
        return self::$BOX;
    }
    public static function BAR(): Layout
    {
        if (!isset(self::$BAR)) {
            self::$BAR = new Layout('bar');
        }
        return self::$BAR;
    }
    public static function MODAL(): Layout
    {
        if (!isset(self::$MODAL)) {
            self::$MODAL = new Layout('modal');
        }
        return self::$MODAL;
    }
}