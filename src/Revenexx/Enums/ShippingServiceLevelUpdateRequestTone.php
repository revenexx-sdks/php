<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingServiceLevelUpdateRequestTone implements JsonSerializable
{
    private static ShippingServiceLevelUpdateRequestTone $NEUTRAL;
    private static ShippingServiceLevelUpdateRequestTone $INFO;
    private static ShippingServiceLevelUpdateRequestTone $SUCCESS;
    private static ShippingServiceLevelUpdateRequestTone $WARNING;
    private static ShippingServiceLevelUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): ShippingServiceLevelUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingServiceLevelUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingServiceLevelUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingServiceLevelUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingServiceLevelUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingServiceLevelUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingServiceLevelUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingServiceLevelUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingServiceLevelUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingServiceLevelUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}