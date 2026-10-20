<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderShipmentDeliveryStatus implements JsonSerializable
{
    private static OrderShipmentDeliveryStatus $UNKNOWN;
    private static OrderShipmentDeliveryStatus $INTRANSIT;
    private static OrderShipmentDeliveryStatus $EXCEPTION;
    private static OrderShipmentDeliveryStatus $DELIVERED;
    private static OrderShipmentDeliveryStatus $RETURNED;

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

    public static function UNKNOWN(): OrderShipmentDeliveryStatus
    {
        if (!isset(self::$UNKNOWN)) {
            self::$UNKNOWN = new OrderShipmentDeliveryStatus('unknown');
        }
        return self::$UNKNOWN;
    }
    public static function INTRANSIT(): OrderShipmentDeliveryStatus
    {
        if (!isset(self::$INTRANSIT)) {
            self::$INTRANSIT = new OrderShipmentDeliveryStatus('in_transit');
        }
        return self::$INTRANSIT;
    }
    public static function EXCEPTION(): OrderShipmentDeliveryStatus
    {
        if (!isset(self::$EXCEPTION)) {
            self::$EXCEPTION = new OrderShipmentDeliveryStatus('exception');
        }
        return self::$EXCEPTION;
    }
    public static function DELIVERED(): OrderShipmentDeliveryStatus
    {
        if (!isset(self::$DELIVERED)) {
            self::$DELIVERED = new OrderShipmentDeliveryStatus('delivered');
        }
        return self::$DELIVERED;
    }
    public static function RETURNED(): OrderShipmentDeliveryStatus
    {
        if (!isset(self::$RETURNED)) {
            self::$RETURNED = new OrderShipmentDeliveryStatus('returned');
        }
        return self::$RETURNED;
    }
}