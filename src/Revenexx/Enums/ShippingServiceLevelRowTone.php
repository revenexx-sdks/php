<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingServiceLevelRowTone implements JsonSerializable
{
    private static ShippingServiceLevelRowTone $NEUTRAL;
    private static ShippingServiceLevelRowTone $INFO;
    private static ShippingServiceLevelRowTone $SUCCESS;
    private static ShippingServiceLevelRowTone $WARNING;
    private static ShippingServiceLevelRowTone $DANGER;

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

    public static function NEUTRAL(): ShippingServiceLevelRowTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingServiceLevelRowTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingServiceLevelRowTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingServiceLevelRowTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingServiceLevelRowTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingServiceLevelRowTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingServiceLevelRowTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingServiceLevelRowTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingServiceLevelRowTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingServiceLevelRowTone('danger');
        }
        return self::$DANGER;
    }
}