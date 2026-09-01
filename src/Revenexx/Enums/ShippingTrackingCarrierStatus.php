<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingTrackingCarrierStatus implements JsonSerializable
{
    private static ShippingTrackingCarrierStatus $ACTIVE;
    private static ShippingTrackingCarrierStatus $PAUSED;
    private static ShippingTrackingCarrierStatus $RETIRED;

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

    public static function ACTIVE(): ShippingTrackingCarrierStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new ShippingTrackingCarrierStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): ShippingTrackingCarrierStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new ShippingTrackingCarrierStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function RETIRED(): ShippingTrackingCarrierStatus
    {
        if (!isset(self::$RETIRED)) {
            self::$RETIRED = new ShippingTrackingCarrierStatus('retired');
        }
        return self::$RETIRED;
    }
}