<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderPaymentStatus implements JsonSerializable
{
    private static OrderPaymentStatus $OPEN;
    private static OrderPaymentStatus $PENDING;
    private static OrderPaymentStatus $AUTHORIZED;
    private static OrderPaymentStatus $PAID;
    private static OrderPaymentStatus $PARTIALLYPAID;
    private static OrderPaymentStatus $REFUNDED;
    private static OrderPaymentStatus $FAILED;

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

    public static function OPEN(): OrderPaymentStatus
    {
        if (!isset(self::$OPEN)) {
            self::$OPEN = new OrderPaymentStatus('open');
        }
        return self::$OPEN;
    }
    public static function PENDING(): OrderPaymentStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new OrderPaymentStatus('pending');
        }
        return self::$PENDING;
    }
    public static function AUTHORIZED(): OrderPaymentStatus
    {
        if (!isset(self::$AUTHORIZED)) {
            self::$AUTHORIZED = new OrderPaymentStatus('authorized');
        }
        return self::$AUTHORIZED;
    }
    public static function PAID(): OrderPaymentStatus
    {
        if (!isset(self::$PAID)) {
            self::$PAID = new OrderPaymentStatus('paid');
        }
        return self::$PAID;
    }
    public static function PARTIALLYPAID(): OrderPaymentStatus
    {
        if (!isset(self::$PARTIALLYPAID)) {
            self::$PARTIALLYPAID = new OrderPaymentStatus('partially_paid');
        }
        return self::$PARTIALLYPAID;
    }
    public static function REFUNDED(): OrderPaymentStatus
    {
        if (!isset(self::$REFUNDED)) {
            self::$REFUNDED = new OrderPaymentStatus('refunded');
        }
        return self::$REFUNDED;
    }
    public static function FAILED(): OrderPaymentStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new OrderPaymentStatus('failed');
        }
        return self::$FAILED;
    }
}