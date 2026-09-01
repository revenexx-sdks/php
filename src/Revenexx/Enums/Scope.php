<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Scope implements JsonSerializable
{
    private static Scope $ALL;
    private static Scope $MARKETING;

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

    public static function ALL(): Scope
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new Scope('all');
        }
        return self::$ALL;
    }
    public static function MARKETING(): Scope
    {
        if (!isset(self::$MARKETING)) {
            self::$MARKETING = new Scope('marketing');
        }
        return self::$MARKETING;
    }
}