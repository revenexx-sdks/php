<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderStatus implements JsonSerializable
{
    private static OrderStatus $PENDING;
    private static OrderStatus $PLACED;
    private static OrderStatus $INFULFILLMENT;
    private static OrderStatus $COMPLETED;
    private static OrderStatus $CANCELLED;

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

    public static function PENDING(): OrderStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new OrderStatus('pending');
        }
        return self::$PENDING;
    }
    public static function PLACED(): OrderStatus
    {
        if (!isset(self::$PLACED)) {
            self::$PLACED = new OrderStatus('placed');
        }
        return self::$PLACED;
    }
    public static function INFULFILLMENT(): OrderStatus
    {
        if (!isset(self::$INFULFILLMENT)) {
            self::$INFULFILLMENT = new OrderStatus('in_fulfillment');
        }
        return self::$INFULFILLMENT;
    }
    public static function COMPLETED(): OrderStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new OrderStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function CANCELLED(): OrderStatus
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new OrderStatus('cancelled');
        }
        return self::$CANCELLED;
    }
}