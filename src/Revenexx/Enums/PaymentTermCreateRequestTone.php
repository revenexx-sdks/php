<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentTermCreateRequestTone implements JsonSerializable
{
    private static PaymentTermCreateRequestTone $NEUTRAL;
    private static PaymentTermCreateRequestTone $INFO;
    private static PaymentTermCreateRequestTone $SUCCESS;
    private static PaymentTermCreateRequestTone $WARNING;
    private static PaymentTermCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): PaymentTermCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new PaymentTermCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): PaymentTermCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new PaymentTermCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): PaymentTermCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new PaymentTermCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): PaymentTermCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new PaymentTermCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): PaymentTermCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new PaymentTermCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}