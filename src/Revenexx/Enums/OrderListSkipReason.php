<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListSkipReason implements JsonSerializable
{
    private static OrderListSkipReason $MISSINGARTICLE;
    private static OrderListSkipReason $NOCURRENTPRICE;

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

    public static function MISSINGARTICLE(): OrderListSkipReason
    {
        if (!isset(self::$MISSINGARTICLE)) {
            self::$MISSINGARTICLE = new OrderListSkipReason('missing_article');
        }
        return self::$MISSINGARTICLE;
    }
    public static function NOCURRENTPRICE(): OrderListSkipReason
    {
        if (!isset(self::$NOCURRENTPRICE)) {
            self::$NOCURRENTPRICE = new OrderListSkipReason('no_current_price');
        }
        return self::$NOCURRENTPRICE;
    }
}