<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EventRequestType implements JsonSerializable
{
    private static EventRequestType $CLICK;
    private static EventRequestType $ADDTOCART;
    private static EventRequestType $PURCHASE;

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

    public static function CLICK(): EventRequestType
    {
        if (!isset(self::$CLICK)) {
            self::$CLICK = new EventRequestType('click');
        }
        return self::$CLICK;
    }
    public static function ADDTOCART(): EventRequestType
    {
        if (!isset(self::$ADDTOCART)) {
            self::$ADDTOCART = new EventRequestType('add_to_cart');
        }
        return self::$ADDTOCART;
    }
    public static function PURCHASE(): EventRequestType
    {
        if (!isset(self::$PURCHASE)) {
            self::$PURCHASE = new EventRequestType('purchase');
        }
        return self::$PURCHASE;
    }
}