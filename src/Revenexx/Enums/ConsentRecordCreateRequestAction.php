<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentRecordCreateRequestAction implements JsonSerializable
{
    private static ConsentRecordCreateRequestAction $ACCEPTALL;
    private static ConsentRecordCreateRequestAction $REJECTALL;
    private static ConsentRecordCreateRequestAction $CUSTOM;
    private static ConsentRecordCreateRequestAction $VENDORGRANT;
    private static ConsentRecordCreateRequestAction $WITHDRAW;
    private static ConsentRecordCreateRequestAction $RENEW;

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

    public static function ACCEPTALL(): ConsentRecordCreateRequestAction
    {
        if (!isset(self::$ACCEPTALL)) {
            self::$ACCEPTALL = new ConsentRecordCreateRequestAction('accept_all');
        }
        return self::$ACCEPTALL;
    }
    public static function REJECTALL(): ConsentRecordCreateRequestAction
    {
        if (!isset(self::$REJECTALL)) {
            self::$REJECTALL = new ConsentRecordCreateRequestAction('reject_all');
        }
        return self::$REJECTALL;
    }
    public static function CUSTOM(): ConsentRecordCreateRequestAction
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new ConsentRecordCreateRequestAction('custom');
        }
        return self::$CUSTOM;
    }
    public static function VENDORGRANT(): ConsentRecordCreateRequestAction
    {
        if (!isset(self::$VENDORGRANT)) {
            self::$VENDORGRANT = new ConsentRecordCreateRequestAction('vendor_grant');
        }
        return self::$VENDORGRANT;
    }
    public static function WITHDRAW(): ConsentRecordCreateRequestAction
    {
        if (!isset(self::$WITHDRAW)) {
            self::$WITHDRAW = new ConsentRecordCreateRequestAction('withdraw');
        }
        return self::$WITHDRAW;
    }
    public static function RENEW(): ConsentRecordCreateRequestAction
    {
        if (!isset(self::$RENEW)) {
            self::$RENEW = new ConsentRecordCreateRequestAction('renew');
        }
        return self::$RENEW;
    }
}