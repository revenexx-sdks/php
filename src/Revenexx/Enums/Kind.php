<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Kind implements JsonSerializable
{
    private static Kind $ACTIVE;
    private static Kind $STATIC;

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

    public static function ACTIVE(): Kind
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new Kind('active');
        }
        return self::$ACTIVE;
    }
    public static function STATIC(): Kind
    {
        if (!isset(self::$STATIC)) {
            self::$STATIC = new Kind('static');
        }
        return self::$STATIC;
    }
}