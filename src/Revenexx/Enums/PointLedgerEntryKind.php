<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PointLedgerEntryKind implements JsonSerializable
{
    private static PointLedgerEntryKind $EARN;
    private static PointLedgerEntryKind $REDEEM;
    private static PointLedgerEntryKind $EXPIRE;
    private static PointLedgerEntryKind $ADJUST;
    private static PointLedgerEntryKind $REVERSE;

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

    public static function EARN(): PointLedgerEntryKind
    {
        if (!isset(self::$EARN)) {
            self::$EARN = new PointLedgerEntryKind('earn');
        }
        return self::$EARN;
    }
    public static function REDEEM(): PointLedgerEntryKind
    {
        if (!isset(self::$REDEEM)) {
            self::$REDEEM = new PointLedgerEntryKind('redeem');
        }
        return self::$REDEEM;
    }
    public static function EXPIRE(): PointLedgerEntryKind
    {
        if (!isset(self::$EXPIRE)) {
            self::$EXPIRE = new PointLedgerEntryKind('expire');
        }
        return self::$EXPIRE;
    }
    public static function ADJUST(): PointLedgerEntryKind
    {
        if (!isset(self::$ADJUST)) {
            self::$ADJUST = new PointLedgerEntryKind('adjust');
        }
        return self::$ADJUST;
    }
    public static function REVERSE(): PointLedgerEntryKind
    {
        if (!isset(self::$REVERSE)) {
            self::$REVERSE = new PointLedgerEntryKind('reverse');
        }
        return self::$REVERSE;
    }
}