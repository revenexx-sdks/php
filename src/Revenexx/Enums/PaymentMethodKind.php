<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentMethodKind implements JsonSerializable
{
    private static PaymentMethodKind $SELFMANAGED;
    private static PaymentMethodKind $PSP;

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

    public static function SELFMANAGED(): PaymentMethodKind
    {
        if (!isset(self::$SELFMANAGED)) {
            self::$SELFMANAGED = new PaymentMethodKind('self_managed');
        }
        return self::$SELFMANAGED;
    }
    public static function PSP(): PaymentMethodKind
    {
        if (!isset(self::$PSP)) {
            self::$PSP = new PaymentMethodKind('psp');
        }
        return self::$PSP;
    }
}