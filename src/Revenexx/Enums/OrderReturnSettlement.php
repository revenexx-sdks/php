<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderReturnSettlement implements JsonSerializable
{
    private static OrderReturnSettlement $REFUND;
    private static OrderReturnSettlement $PARTIALREFUND;
    private static OrderReturnSettlement $REPLACEMENT;
    private static OrderReturnSettlement $REPAIR;
    private static OrderReturnSettlement $STORECREDIT;

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

    public static function REFUND(): OrderReturnSettlement
    {
        if (!isset(self::$REFUND)) {
            self::$REFUND = new OrderReturnSettlement('refund');
        }
        return self::$REFUND;
    }
    public static function PARTIALREFUND(): OrderReturnSettlement
    {
        if (!isset(self::$PARTIALREFUND)) {
            self::$PARTIALREFUND = new OrderReturnSettlement('partial_refund');
        }
        return self::$PARTIALREFUND;
    }
    public static function REPLACEMENT(): OrderReturnSettlement
    {
        if (!isset(self::$REPLACEMENT)) {
            self::$REPLACEMENT = new OrderReturnSettlement('replacement');
        }
        return self::$REPLACEMENT;
    }
    public static function REPAIR(): OrderReturnSettlement
    {
        if (!isset(self::$REPAIR)) {
            self::$REPAIR = new OrderReturnSettlement('repair');
        }
        return self::$REPAIR;
    }
    public static function STORECREDIT(): OrderReturnSettlement
    {
        if (!isset(self::$STORECREDIT)) {
            self::$STORECREDIT = new OrderReturnSettlement('store_credit');
        }
        return self::$STORECREDIT;
    }
}