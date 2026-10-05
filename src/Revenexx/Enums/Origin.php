<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Origin implements JsonSerializable
{
    private static Origin $BUYER;
    private static Origin $SELLER;

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

    public static function BUYER(): Origin
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new Origin('buyer');
        }
        return self::$BUYER;
    }
    public static function SELLER(): Origin
    {
        if (!isset(self::$SELLER)) {
            self::$SELLER = new Origin('seller');
        }
        return self::$SELLER;
    }
}