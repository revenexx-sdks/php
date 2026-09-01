<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentFeeType implements JsonSerializable
{
    private static PaymentFeeType $NONE;
    private static PaymentFeeType $FIXED;
    private static PaymentFeeType $PERCENT;

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

    public static function NONE(): PaymentFeeType
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new PaymentFeeType('none');
        }
        return self::$NONE;
    }
    public static function FIXED(): PaymentFeeType
    {
        if (!isset(self::$FIXED)) {
            self::$FIXED = new PaymentFeeType('fixed');
        }
        return self::$FIXED;
    }
    public static function PERCENT(): PaymentFeeType
    {
        if (!isset(self::$PERCENT)) {
            self::$PERCENT = new PaymentFeeType('percent');
        }
        return self::$PERCENT;
    }
}