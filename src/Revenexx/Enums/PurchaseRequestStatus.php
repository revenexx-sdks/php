<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurchaseRequestStatus implements JsonSerializable
{
    private static PurchaseRequestStatus $PENDING;
    private static PurchaseRequestStatus $APPROVED;
    private static PurchaseRequestStatus $ORDERED;
    private static PurchaseRequestStatus $DECLINED;
    private static PurchaseRequestStatus $CANCELLED;

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

    public static function PENDING(): PurchaseRequestStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new PurchaseRequestStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): PurchaseRequestStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new PurchaseRequestStatus('approved');
        }
        return self::$APPROVED;
    }
    public static function ORDERED(): PurchaseRequestStatus
    {
        if (!isset(self::$ORDERED)) {
            self::$ORDERED = new PurchaseRequestStatus('ordered');
        }
        return self::$ORDERED;
    }
    public static function DECLINED(): PurchaseRequestStatus
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new PurchaseRequestStatus('declined');
        }
        return self::$DECLINED;
    }
    public static function CANCELLED(): PurchaseRequestStatus
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new PurchaseRequestStatus('cancelled');
        }
        return self::$CANCELLED;
    }
}