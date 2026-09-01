<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentTermUpdateRequestTone implements JsonSerializable
{
    private static PaymentTermUpdateRequestTone $NEUTRAL;
    private static PaymentTermUpdateRequestTone $INFO;
    private static PaymentTermUpdateRequestTone $SUCCESS;
    private static PaymentTermUpdateRequestTone $WARNING;
    private static PaymentTermUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): PaymentTermUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new PaymentTermUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): PaymentTermUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new PaymentTermUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): PaymentTermUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new PaymentTermUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): PaymentTermUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new PaymentTermUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): PaymentTermUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new PaymentTermUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}