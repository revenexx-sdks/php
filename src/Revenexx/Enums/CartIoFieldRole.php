<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartIoFieldRole implements JsonSerializable
{
    private static CartIoFieldRole $COLUMN;
    private static CartIoFieldRole $KEY;

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

    public static function COLUMN(): CartIoFieldRole
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new CartIoFieldRole('column');
        }
        return self::$COLUMN;
    }
    public static function KEY(): CartIoFieldRole
    {
        if (!isset(self::$KEY)) {
            self::$KEY = new CartIoFieldRole('key');
        }
        return self::$KEY;
    }
}