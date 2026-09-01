<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderFulfillmentStatus implements JsonSerializable
{
    private static OrderFulfillmentStatus $UNFULFILLED;
    private static OrderFulfillmentStatus $PARTIAL;
    private static OrderFulfillmentStatus $FULFILLED;

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

    public static function UNFULFILLED(): OrderFulfillmentStatus
    {
        if (!isset(self::$UNFULFILLED)) {
            self::$UNFULFILLED = new OrderFulfillmentStatus('unfulfilled');
        }
        return self::$UNFULFILLED;
    }
    public static function PARTIAL(): OrderFulfillmentStatus
    {
        if (!isset(self::$PARTIAL)) {
            self::$PARTIAL = new OrderFulfillmentStatus('partial');
        }
        return self::$PARTIAL;
    }
    public static function FULFILLED(): OrderFulfillmentStatus
    {
        if (!isset(self::$FULFILLED)) {
            self::$FULFILLED = new OrderFulfillmentStatus('fulfilled');
        }
        return self::$FULFILLED;
    }
}