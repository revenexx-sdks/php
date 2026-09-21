<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VoucherBatchWriteStatus implements JsonSerializable
{
    private static VoucherBatchWriteStatus $ACTIVE;
    private static VoucherBatchWriteStatus $DISABLED;

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

    public static function ACTIVE(): VoucherBatchWriteStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new VoucherBatchWriteStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function DISABLED(): VoucherBatchWriteStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new VoucherBatchWriteStatus('disabled');
        }
        return self::$DISABLED;
    }
}