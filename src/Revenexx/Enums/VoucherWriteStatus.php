<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VoucherWriteStatus implements JsonSerializable
{
    private static VoucherWriteStatus $ACTIVE;
    private static VoucherWriteStatus $DISABLED;

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

    public static function ACTIVE(): VoucherWriteStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new VoucherWriteStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function DISABLED(): VoucherWriteStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new VoucherWriteStatus('disabled');
        }
        return self::$DISABLED;
    }
}