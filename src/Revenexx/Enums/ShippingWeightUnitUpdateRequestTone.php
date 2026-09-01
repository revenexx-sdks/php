<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingWeightUnitUpdateRequestTone implements JsonSerializable
{
    private static ShippingWeightUnitUpdateRequestTone $NEUTRAL;
    private static ShippingWeightUnitUpdateRequestTone $INFO;
    private static ShippingWeightUnitUpdateRequestTone $SUCCESS;
    private static ShippingWeightUnitUpdateRequestTone $WARNING;
    private static ShippingWeightUnitUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): ShippingWeightUnitUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingWeightUnitUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingWeightUnitUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingWeightUnitUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingWeightUnitUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingWeightUnitUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingWeightUnitUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingWeightUnitUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingWeightUnitUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingWeightUnitUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}