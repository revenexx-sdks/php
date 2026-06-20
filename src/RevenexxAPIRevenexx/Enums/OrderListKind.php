<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class OrderListKind implements JsonSerializable
{
    private static OrderListKind $SHOPPING;
    private static OrderListKind $LABEL;

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

    public static function SHOPPING(): OrderListKind
    {
        if (!isset(self::$SHOPPING)) {
            self::$SHOPPING = new OrderListKind('shopping');
        }
        return self::$SHOPPING;
    }
    public static function LABEL(): OrderListKind
    {
        if (!isset(self::$LABEL)) {
            self::$LABEL = new OrderListKind('label');
        }
        return self::$LABEL;
    }
}