<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PunchoutClaimPurchaseMode implements JsonSerializable
{
    private static PunchoutClaimPurchaseMode $TRANSFER;
    private static PunchoutClaimPurchaseMode $ORDER;
    private static PunchoutClaimPurchaseMode $ORDERANDTRANSFER;

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

    public static function TRANSFER(): PunchoutClaimPurchaseMode
    {
        if (!isset(self::$TRANSFER)) {
            self::$TRANSFER = new PunchoutClaimPurchaseMode('transfer');
        }
        return self::$TRANSFER;
    }
    public static function ORDER(): PunchoutClaimPurchaseMode
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new PunchoutClaimPurchaseMode('order');
        }
        return self::$ORDER;
    }
    public static function ORDERANDTRANSFER(): PunchoutClaimPurchaseMode
    {
        if (!isset(self::$ORDERANDTRANSFER)) {
            self::$ORDERANDTRANSFER = new PunchoutClaimPurchaseMode('order_and_transfer');
        }
        return self::$ORDERANDTRANSFER;
    }
}