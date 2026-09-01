<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListKindTone implements JsonSerializable
{
    private static OrderListKindTone $NEUTRAL;
    private static OrderListKindTone $INFO;
    private static OrderListKindTone $SUCCESS;
    private static OrderListKindTone $WARNING;
    private static OrderListKindTone $DANGER;

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

    public static function NEUTRAL(): OrderListKindTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new OrderListKindTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): OrderListKindTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new OrderListKindTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): OrderListKindTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new OrderListKindTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): OrderListKindTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new OrderListKindTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): OrderListKindTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new OrderListKindTone('danger');
        }
        return self::$DANGER;
    }
}