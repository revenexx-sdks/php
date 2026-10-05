<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttachRequestDirection implements JsonSerializable
{
    private static AttachRequestDirection $BUYER;
    private static AttachRequestDirection $SELLER;

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

    public static function BUYER(): AttachRequestDirection
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new AttachRequestDirection('buyer');
        }
        return self::$BUYER;
    }
    public static function SELLER(): AttachRequestDirection
    {
        if (!isset(self::$SELLER)) {
            self::$SELLER = new AttachRequestDirection('seller');
        }
        return self::$SELLER;
    }
}