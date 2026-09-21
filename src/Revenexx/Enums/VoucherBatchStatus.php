<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VoucherBatchStatus implements JsonSerializable
{
    private static VoucherBatchStatus $ACTIVE;
    private static VoucherBatchStatus $DISABLED;

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

    public static function ACTIVE(): VoucherBatchStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new VoucherBatchStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function DISABLED(): VoucherBatchStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new VoucherBatchStatus('disabled');
        }
        return self::$DISABLED;
    }
}