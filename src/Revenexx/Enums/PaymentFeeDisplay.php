<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentFeeDisplay implements JsonSerializable
{
    private static PaymentFeeDisplay $NET;
    private static PaymentFeeDisplay $GROSS;

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

    public static function NET(): PaymentFeeDisplay
    {
        if (!isset(self::$NET)) {
            self::$NET = new PaymentFeeDisplay('net');
        }
        return self::$NET;
    }
    public static function GROSS(): PaymentFeeDisplay
    {
        if (!isset(self::$GROSS)) {
            self::$GROSS = new PaymentFeeDisplay('gross');
        }
        return self::$GROSS;
    }
}