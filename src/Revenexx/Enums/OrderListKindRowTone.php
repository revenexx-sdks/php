<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListKindRowTone implements JsonSerializable
{
    private static OrderListKindRowTone $NEUTRAL;
    private static OrderListKindRowTone $INFO;
    private static OrderListKindRowTone $SUCCESS;
    private static OrderListKindRowTone $WARNING;
    private static OrderListKindRowTone $DANGER;

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

    public static function NEUTRAL(): OrderListKindRowTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new OrderListKindRowTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): OrderListKindRowTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new OrderListKindRowTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): OrderListKindRowTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new OrderListKindRowTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): OrderListKindRowTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new OrderListKindRowTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): OrderListKindRowTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new OrderListKindRowTone('danger');
        }
        return self::$DANGER;
    }
}