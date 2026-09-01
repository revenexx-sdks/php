<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingWeightUnitCreateRequestTone implements JsonSerializable
{
    private static ShippingWeightUnitCreateRequestTone $NEUTRAL;
    private static ShippingWeightUnitCreateRequestTone $INFO;
    private static ShippingWeightUnitCreateRequestTone $SUCCESS;
    private static ShippingWeightUnitCreateRequestTone $WARNING;
    private static ShippingWeightUnitCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): ShippingWeightUnitCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingWeightUnitCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingWeightUnitCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingWeightUnitCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingWeightUnitCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingWeightUnitCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingWeightUnitCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingWeightUnitCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingWeightUnitCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingWeightUnitCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}