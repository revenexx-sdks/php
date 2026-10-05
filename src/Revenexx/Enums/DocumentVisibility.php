<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentVisibility implements JsonSerializable
{
    private static DocumentVisibility $INTERNAL;
    private static DocumentVisibility $CUSTOMER;

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

    public static function INTERNAL(): DocumentVisibility
    {
        if (!isset(self::$INTERNAL)) {
            self::$INTERNAL = new DocumentVisibility('internal');
        }
        return self::$INTERNAL;
    }
    public static function CUSTOMER(): DocumentVisibility
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new DocumentVisibility('customer');
        }
        return self::$CUSTOMER;
    }
}