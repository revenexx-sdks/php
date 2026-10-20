<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SearchEventsType implements JsonSerializable
{
    private static SearchEventsType $CLICK;
    private static SearchEventsType $ADDTOCART;
    private static SearchEventsType $PURCHASE;

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

    public static function CLICK(): SearchEventsType
    {
        if (!isset(self::$CLICK)) {
            self::$CLICK = new SearchEventsType('click');
        }
        return self::$CLICK;
    }
    public static function ADDTOCART(): SearchEventsType
    {
        if (!isset(self::$ADDTOCART)) {
            self::$ADDTOCART = new SearchEventsType('add_to_cart');
        }
        return self::$ADDTOCART;
    }
    public static function PURCHASE(): SearchEventsType
    {
        if (!isset(self::$PURCHASE)) {
            self::$PURCHASE = new SearchEventsType('purchase');
        }
        return self::$PURCHASE;
    }
}