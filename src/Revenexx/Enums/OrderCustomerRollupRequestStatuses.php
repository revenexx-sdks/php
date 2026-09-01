<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderCustomerRollupRequestStatuses implements JsonSerializable
{
    private static OrderCustomerRollupRequestStatuses $PENDING;
    private static OrderCustomerRollupRequestStatuses $PLACED;
    private static OrderCustomerRollupRequestStatuses $INFULFILLMENT;
    private static OrderCustomerRollupRequestStatuses $COMPLETED;
    private static OrderCustomerRollupRequestStatuses $CANCELLED;

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

    public static function PENDING(): OrderCustomerRollupRequestStatuses
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new OrderCustomerRollupRequestStatuses('pending');
        }
        return self::$PENDING;
    }
    public static function PLACED(): OrderCustomerRollupRequestStatuses
    {
        if (!isset(self::$PLACED)) {
            self::$PLACED = new OrderCustomerRollupRequestStatuses('placed');
        }
        return self::$PLACED;
    }
    public static function INFULFILLMENT(): OrderCustomerRollupRequestStatuses
    {
        if (!isset(self::$INFULFILLMENT)) {
            self::$INFULFILLMENT = new OrderCustomerRollupRequestStatuses('in_fulfillment');
        }
        return self::$INFULFILLMENT;
    }
    public static function COMPLETED(): OrderCustomerRollupRequestStatuses
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new OrderCustomerRollupRequestStatuses('completed');
        }
        return self::$COMPLETED;
    }
    public static function CANCELLED(): OrderCustomerRollupRequestStatuses
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new OrderCustomerRollupRequestStatuses('cancelled');
        }
        return self::$CANCELLED;
    }
}