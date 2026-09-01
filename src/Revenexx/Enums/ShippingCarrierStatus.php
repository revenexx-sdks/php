<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingCarrierStatus implements JsonSerializable
{
    private static ShippingCarrierStatus $ACTIVE;
    private static ShippingCarrierStatus $PAUSED;
    private static ShippingCarrierStatus $RETIRED;

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

    public static function ACTIVE(): ShippingCarrierStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new ShippingCarrierStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): ShippingCarrierStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new ShippingCarrierStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function RETIRED(): ShippingCarrierStatus
    {
        if (!isset(self::$RETIRED)) {
            self::$RETIRED = new ShippingCarrierStatus('retired');
        }
        return self::$RETIRED;
    }
}