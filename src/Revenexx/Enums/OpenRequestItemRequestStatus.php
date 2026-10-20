<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OpenRequestItemRequestStatus implements JsonSerializable
{
    private static OpenRequestItemRequestStatus $PENDING;
    private static OpenRequestItemRequestStatus $APPROVED;
    private static OpenRequestItemRequestStatus $ORDERED;
    private static OpenRequestItemRequestStatus $DECLINED;
    private static OpenRequestItemRequestStatus $CANCELLED;

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

    public static function PENDING(): OpenRequestItemRequestStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new OpenRequestItemRequestStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): OpenRequestItemRequestStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new OpenRequestItemRequestStatus('approved');
        }
        return self::$APPROVED;
    }
    public static function ORDERED(): OpenRequestItemRequestStatus
    {
        if (!isset(self::$ORDERED)) {
            self::$ORDERED = new OpenRequestItemRequestStatus('ordered');
        }
        return self::$ORDERED;
    }
    public static function DECLINED(): OpenRequestItemRequestStatus
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new OpenRequestItemRequestStatus('declined');
        }
        return self::$DECLINED;
    }
    public static function CANCELLED(): OpenRequestItemRequestStatus
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new OpenRequestItemRequestStatus('cancelled');
        }
        return self::$CANCELLED;
    }
}