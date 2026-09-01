<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderCancellationScope implements JsonSerializable
{
    private static OrderCancellationScope $ORDER;
    private static OrderCancellationScope $ITEMS;

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

    public static function ORDER(): OrderCancellationScope
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new OrderCancellationScope('order');
        }
        return self::$ORDER;
    }
    public static function ITEMS(): OrderCancellationScope
    {
        if (!isset(self::$ITEMS)) {
            self::$ITEMS = new OrderCancellationScope('items');
        }
        return self::$ITEMS;
    }
}