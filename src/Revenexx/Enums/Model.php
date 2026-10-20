<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Model implements JsonSerializable
{
    private static Model $FIRSTTOUCH;
    private static Model $LASTTOUCH;

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

    public static function FIRSTTOUCH(): Model
    {
        if (!isset(self::$FIRSTTOUCH)) {
            self::$FIRSTTOUCH = new Model('first_touch');
        }
        return self::$FIRSTTOUCH;
    }
    public static function LASTTOUCH(): Model
    {
        if (!isset(self::$LASTTOUCH)) {
            self::$LASTTOUCH = new Model('last_touch');
        }
        return self::$LASTTOUCH;
    }
}