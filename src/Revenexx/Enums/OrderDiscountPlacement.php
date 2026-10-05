<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderDiscountPlacement implements JsonSerializable
{
    private static OrderDiscountPlacement $LINE;
    private static OrderDiscountPlacement $HEAD;
    private static OrderDiscountPlacement $LINEITEM;

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

    public static function LINE(): OrderDiscountPlacement
    {
        if (!isset(self::$LINE)) {
            self::$LINE = new OrderDiscountPlacement('line');
        }
        return self::$LINE;
    }
    public static function HEAD(): OrderDiscountPlacement
    {
        if (!isset(self::$HEAD)) {
            self::$HEAD = new OrderDiscountPlacement('head');
        }
        return self::$HEAD;
    }
    public static function LINEITEM(): OrderDiscountPlacement
    {
        if (!isset(self::$LINEITEM)) {
            self::$LINEITEM = new OrderDiscountPlacement('line_item');
        }
        return self::$LINEITEM;
    }
}