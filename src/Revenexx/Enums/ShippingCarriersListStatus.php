<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingCarriersListStatus implements JsonSerializable
{
    private static ShippingCarriersListStatus $ACTIVE;
    private static ShippingCarriersListStatus $PAUSED;
    private static ShippingCarriersListStatus $RETIRED;

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

    public static function ACTIVE(): ShippingCarriersListStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new ShippingCarriersListStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): ShippingCarriersListStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new ShippingCarriersListStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function RETIRED(): ShippingCarriersListStatus
    {
        if (!isset(self::$RETIRED)) {
            self::$RETIRED = new ShippingCarriersListStatus('retired');
        }
        return self::$RETIRED;
    }
}