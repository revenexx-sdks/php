<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Visibility implements JsonSerializable
{
    private static Visibility $PUBLIC;
    private static Visibility $PRIVATE;

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

    public static function PUBLIC(): Visibility
    {
        if (!isset(self::$PUBLIC)) {
            self::$PUBLIC = new Visibility('public');
        }
        return self::$PUBLIC;
    }
    public static function PRIVATE(): Visibility
    {
        if (!isset(self::$PRIVATE)) {
            self::$PRIVATE = new Visibility('private');
        }
        return self::$PRIVATE;
    }
}