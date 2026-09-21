<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VoucherPatchStatus implements JsonSerializable
{
    private static VoucherPatchStatus $ACTIVE;
    private static VoucherPatchStatus $DISABLED;

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

    public static function ACTIVE(): VoucherPatchStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new VoucherPatchStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function DISABLED(): VoucherPatchStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new VoucherPatchStatus('disabled');
        }
        return self::$DISABLED;
    }
}