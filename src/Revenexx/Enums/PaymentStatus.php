<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentStatus implements JsonSerializable
{
    private static PaymentStatus $CREATED;
    private static PaymentStatus $REQUIRESACTION;
    private static PaymentStatus $AUTHORIZED;
    private static PaymentStatus $CAPTURED;
    private static PaymentStatus $FAILED;
    private static PaymentStatus $CANCELLED;
    private static PaymentStatus $REFUNDED;

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

    public static function CREATED(): PaymentStatus
    {
        if (!isset(self::$CREATED)) {
            self::$CREATED = new PaymentStatus('created');
        }
        return self::$CREATED;
    }
    public static function REQUIRESACTION(): PaymentStatus
    {
        if (!isset(self::$REQUIRESACTION)) {
            self::$REQUIRESACTION = new PaymentStatus('requires_action');
        }
        return self::$REQUIRESACTION;
    }
    public static function AUTHORIZED(): PaymentStatus
    {
        if (!isset(self::$AUTHORIZED)) {
            self::$AUTHORIZED = new PaymentStatus('authorized');
        }
        return self::$AUTHORIZED;
    }
    public static function CAPTURED(): PaymentStatus
    {
        if (!isset(self::$CAPTURED)) {
            self::$CAPTURED = new PaymentStatus('captured');
        }
        return self::$CAPTURED;
    }
    public static function FAILED(): PaymentStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new PaymentStatus('failed');
        }
        return self::$FAILED;
    }
    public static function CANCELLED(): PaymentStatus
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new PaymentStatus('cancelled');
        }
        return self::$CANCELLED;
    }
    public static function REFUNDED(): PaymentStatus
    {
        if (!isset(self::$REFUNDED)) {
            self::$REFUNDED = new PaymentStatus('refunded');
        }
        return self::$REFUNDED;
    }
}