<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class Priority implements JsonSerializable
{
    private static Priority $NORMAL;
    private static Priority $HIGH;

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

    public static function NORMAL(): Priority
    {
        if (!isset(self::$NORMAL)) {
            self::$NORMAL = new Priority('normal');
        }
        return self::$NORMAL;
    }
    public static function HIGH(): Priority
    {
        if (!isset(self::$HIGH)) {
            self::$HIGH = new Priority('high');
        }
        return self::$HIGH;
    }
}