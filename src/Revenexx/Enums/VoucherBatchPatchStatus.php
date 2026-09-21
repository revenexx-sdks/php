<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VoucherBatchPatchStatus implements JsonSerializable
{
    private static VoucherBatchPatchStatus $ACTIVE;
    private static VoucherBatchPatchStatus $DISABLED;

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

    public static function ACTIVE(): VoucherBatchPatchStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new VoucherBatchPatchStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function DISABLED(): VoucherBatchPatchStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new VoucherBatchPatchStatus('disabled');
        }
        return self::$DISABLED;
    }
}