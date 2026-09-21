<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VoucherStatus implements JsonSerializable
{
    private static VoucherStatus $ACTIVE;
    private static VoucherStatus $DISABLED;

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

    public static function ACTIVE(): VoucherStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new VoucherStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function DISABLED(): VoucherStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new VoucherStatus('disabled');
        }
        return self::$DISABLED;
    }
}