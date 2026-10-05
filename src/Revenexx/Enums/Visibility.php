<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Visibility implements JsonSerializable
{
    private static Visibility $INTERNAL;
    private static Visibility $CUSTOMER;

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

    public static function INTERNAL(): Visibility
    {
        if (!isset(self::$INTERNAL)) {
            self::$INTERNAL = new Visibility('internal');
        }
        return self::$INTERNAL;
    }
    public static function CUSTOMER(): Visibility
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new Visibility('customer');
        }
        return self::$CUSTOMER;
    }
}