<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderCustomerRollupResponseStatuses implements JsonSerializable
{
    private static OrderCustomerRollupResponseStatuses $PENDING;
    private static OrderCustomerRollupResponseStatuses $PLACED;
    private static OrderCustomerRollupResponseStatuses $INFULFILLMENT;
    private static OrderCustomerRollupResponseStatuses $COMPLETED;
    private static OrderCustomerRollupResponseStatuses $CANCELLED;

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

    public static function PENDING(): OrderCustomerRollupResponseStatuses
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new OrderCustomerRollupResponseStatuses('pending');
        }
        return self::$PENDING;
    }
    public static function PLACED(): OrderCustomerRollupResponseStatuses
    {
        if (!isset(self::$PLACED)) {
            self::$PLACED = new OrderCustomerRollupResponseStatuses('placed');
        }
        return self::$PLACED;
    }
    public static function INFULFILLMENT(): OrderCustomerRollupResponseStatuses
    {
        if (!isset(self::$INFULFILLMENT)) {
            self::$INFULFILLMENT = new OrderCustomerRollupResponseStatuses('in_fulfillment');
        }
        return self::$INFULFILLMENT;
    }
    public static function COMPLETED(): OrderCustomerRollupResponseStatuses
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new OrderCustomerRollupResponseStatuses('completed');
        }
        return self::$COMPLETED;
    }
    public static function CANCELLED(): OrderCustomerRollupResponseStatuses
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new OrderCustomerRollupResponseStatuses('cancelled');
        }
        return self::$CANCELLED;
    }
}