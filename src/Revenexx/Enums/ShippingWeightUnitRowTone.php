<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingWeightUnitRowTone implements JsonSerializable
{
    private static ShippingWeightUnitRowTone $NEUTRAL;
    private static ShippingWeightUnitRowTone $INFO;
    private static ShippingWeightUnitRowTone $SUCCESS;
    private static ShippingWeightUnitRowTone $WARNING;
    private static ShippingWeightUnitRowTone $DANGER;

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

    public static function NEUTRAL(): ShippingWeightUnitRowTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingWeightUnitRowTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingWeightUnitRowTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingWeightUnitRowTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingWeightUnitRowTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingWeightUnitRowTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingWeightUnitRowTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingWeightUnitRowTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingWeightUnitRowTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingWeightUnitRowTone('danger');
        }
        return self::$DANGER;
    }
}