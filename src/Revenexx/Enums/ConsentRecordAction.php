<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentRecordAction implements JsonSerializable
{
    private static ConsentRecordAction $ACCEPTALL;
    private static ConsentRecordAction $REJECTALL;
    private static ConsentRecordAction $CUSTOM;
    private static ConsentRecordAction $VENDORGRANT;
    private static ConsentRecordAction $WITHDRAW;
    private static ConsentRecordAction $RENEW;

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

    public static function ACCEPTALL(): ConsentRecordAction
    {
        if (!isset(self::$ACCEPTALL)) {
            self::$ACCEPTALL = new ConsentRecordAction('accept_all');
        }
        return self::$ACCEPTALL;
    }
    public static function REJECTALL(): ConsentRecordAction
    {
        if (!isset(self::$REJECTALL)) {
            self::$REJECTALL = new ConsentRecordAction('reject_all');
        }
        return self::$REJECTALL;
    }
    public static function CUSTOM(): ConsentRecordAction
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new ConsentRecordAction('custom');
        }
        return self::$CUSTOM;
    }
    public static function VENDORGRANT(): ConsentRecordAction
    {
        if (!isset(self::$VENDORGRANT)) {
            self::$VENDORGRANT = new ConsentRecordAction('vendor_grant');
        }
        return self::$VENDORGRANT;
    }
    public static function WITHDRAW(): ConsentRecordAction
    {
        if (!isset(self::$WITHDRAW)) {
            self::$WITHDRAW = new ConsentRecordAction('withdraw');
        }
        return self::$WITHDRAW;
    }
    public static function RENEW(): ConsentRecordAction
    {
        if (!isset(self::$RENEW)) {
            self::$RENEW = new ConsentRecordAction('renew');
        }
        return self::$RENEW;
    }
}