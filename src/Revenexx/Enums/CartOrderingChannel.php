<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartOrderingChannel implements JsonSerializable
{
    private static CartOrderingChannel $PHONE;
    private static CartOrderingChannel $FAX;
    private static CartOrderingChannel $EMAIL;
    private static CartOrderingChannel $FIELD;

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

    public static function PHONE(): CartOrderingChannel
    {
        if (!isset(self::$PHONE)) {
            self::$PHONE = new CartOrderingChannel('phone');
        }
        return self::$PHONE;
    }
    public static function FAX(): CartOrderingChannel
    {
        if (!isset(self::$FAX)) {
            self::$FAX = new CartOrderingChannel('fax');
        }
        return self::$FAX;
    }
    public static function EMAIL(): CartOrderingChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new CartOrderingChannel('email');
        }
        return self::$EMAIL;
    }
    public static function FIELD(): CartOrderingChannel
    {
        if (!isset(self::$FIELD)) {
            self::$FIELD = new CartOrderingChannel('field');
        }
        return self::$FIELD;
    }
}