<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListCartMode implements JsonSerializable
{
    private static OrderListCartMode $APPEND;
    private static OrderListCartMode $REPLACE;

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

    public static function APPEND(): OrderListCartMode
    {
        if (!isset(self::$APPEND)) {
            self::$APPEND = new OrderListCartMode('append');
        }
        return self::$APPEND;
    }
    public static function REPLACE(): OrderListCartMode
    {
        if (!isset(self::$REPLACE)) {
            self::$REPLACE = new OrderListCartMode('replace');
        }
        return self::$REPLACE;
    }
}