<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderShipmentDeliverySource implements JsonSerializable
{
    private static OrderShipmentDeliverySource $CARRIER;
    private static OrderShipmentDeliverySource $MANUAL;

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

    public static function CARRIER(): OrderShipmentDeliverySource
    {
        if (!isset(self::$CARRIER)) {
            self::$CARRIER = new OrderShipmentDeliverySource('carrier');
        }
        return self::$CARRIER;
    }
    public static function MANUAL(): OrderShipmentDeliverySource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new OrderShipmentDeliverySource('manual');
        }
        return self::$MANUAL;
    }
}