<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Reach implements JsonSerializable
{
    private static Reach $AUTOMATIC;
    private static Reach $CODE;

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

    public static function AUTOMATIC(): Reach
    {
        if (!isset(self::$AUTOMATIC)) {
            self::$AUTOMATIC = new Reach('automatic');
        }
        return self::$AUTOMATIC;
    }
    public static function CODE(): Reach
    {
        if (!isset(self::$CODE)) {
            self::$CODE = new Reach('code');
        }
        return self::$CODE;
    }
}