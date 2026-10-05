<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderDiscountSource implements JsonSerializable
{
    private static OrderDiscountSource $PROMOTION;
    private static OrderDiscountSource $APP;

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

    public static function PROMOTION(): OrderDiscountSource
    {
        if (!isset(self::$PROMOTION)) {
            self::$PROMOTION = new OrderDiscountSource('promotion');
        }
        return self::$PROMOTION;
    }
    public static function APP(): OrderDiscountSource
    {
        if (!isset(self::$APP)) {
            self::$APP = new OrderDiscountSource('app');
        }
        return self::$APP;
    }
}