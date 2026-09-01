<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceListTiebreak implements JsonSerializable
{
    private static PriceListTiebreak $LOWESTPRICE;
    private static PriceListTiebreak $HIGHESTPRICE;
    private static PriceListTiebreak $NEWEST;
    private static PriceListTiebreak $CODE;

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

    public static function LOWESTPRICE(): PriceListTiebreak
    {
        if (!isset(self::$LOWESTPRICE)) {
            self::$LOWESTPRICE = new PriceListTiebreak('lowest_price');
        }
        return self::$LOWESTPRICE;
    }
    public static function HIGHESTPRICE(): PriceListTiebreak
    {
        if (!isset(self::$HIGHESTPRICE)) {
            self::$HIGHESTPRICE = new PriceListTiebreak('highest_price');
        }
        return self::$HIGHESTPRICE;
    }
    public static function NEWEST(): PriceListTiebreak
    {
        if (!isset(self::$NEWEST)) {
            self::$NEWEST = new PriceListTiebreak('newest');
        }
        return self::$NEWEST;
    }
    public static function CODE(): PriceListTiebreak
    {
        if (!isset(self::$CODE)) {
            self::$CODE = new PriceListTiebreak('code');
        }
        return self::$CODE;
    }
}