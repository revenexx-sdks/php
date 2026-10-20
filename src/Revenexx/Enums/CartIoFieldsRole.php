<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartIoFieldsRole implements JsonSerializable
{
    private static CartIoFieldsRole $COLUMN;
    private static CartIoFieldsRole $KEY;

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

    public static function COLUMN(): CartIoFieldsRole
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new CartIoFieldsRole('column');
        }
        return self::$COLUMN;
    }
    public static function KEY(): CartIoFieldsRole
    {
        if (!isset(self::$KEY)) {
            self::$KEY = new CartIoFieldsRole('key');
        }
        return self::$KEY;
    }
}