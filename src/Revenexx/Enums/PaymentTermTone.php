<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentTermTone implements JsonSerializable
{
    private static PaymentTermTone $NEUTRAL;
    private static PaymentTermTone $INFO;
    private static PaymentTermTone $SUCCESS;
    private static PaymentTermTone $WARNING;
    private static PaymentTermTone $DANGER;

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

    public static function NEUTRAL(): PaymentTermTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new PaymentTermTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): PaymentTermTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new PaymentTermTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): PaymentTermTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new PaymentTermTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): PaymentTermTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new PaymentTermTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): PaymentTermTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new PaymentTermTone('danger');
        }
        return self::$DANGER;
    }
}