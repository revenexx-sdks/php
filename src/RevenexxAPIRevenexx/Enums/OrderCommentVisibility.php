<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class OrderCommentVisibility implements JsonSerializable
{
    private static OrderCommentVisibility $INTERNAL;
    private static OrderCommentVisibility $CUSTOMER;

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

    public static function INTERNAL(): OrderCommentVisibility
    {
        if (!isset(self::$INTERNAL)) {
            self::$INTERNAL = new OrderCommentVisibility('internal');
        }
        return self::$INTERNAL;
    }
    public static function CUSTOMER(): OrderCommentVisibility
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new OrderCommentVisibility('customer');
        }
        return self::$CUSTOMER;
    }
}