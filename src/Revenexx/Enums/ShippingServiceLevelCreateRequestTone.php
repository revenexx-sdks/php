<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingServiceLevelCreateRequestTone implements JsonSerializable
{
    private static ShippingServiceLevelCreateRequestTone $NEUTRAL;
    private static ShippingServiceLevelCreateRequestTone $INFO;
    private static ShippingServiceLevelCreateRequestTone $SUCCESS;
    private static ShippingServiceLevelCreateRequestTone $WARNING;
    private static ShippingServiceLevelCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): ShippingServiceLevelCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingServiceLevelCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingServiceLevelCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingServiceLevelCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingServiceLevelCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingServiceLevelCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingServiceLevelCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingServiceLevelCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingServiceLevelCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingServiceLevelCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}