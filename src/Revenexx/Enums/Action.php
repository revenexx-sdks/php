<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Action implements JsonSerializable
{
    private static Action $ACCEPTALL;
    private static Action $REJECTALL;
    private static Action $CUSTOM;
    private static Action $VENDORGRANT;
    private static Action $WITHDRAW;
    private static Action $RENEW;

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

    public static function ACCEPTALL(): Action
    {
        if (!isset(self::$ACCEPTALL)) {
            self::$ACCEPTALL = new Action('accept_all');
        }
        return self::$ACCEPTALL;
    }
    public static function REJECTALL(): Action
    {
        if (!isset(self::$REJECTALL)) {
            self::$REJECTALL = new Action('reject_all');
        }
        return self::$REJECTALL;
    }
    public static function CUSTOM(): Action
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new Action('custom');
        }
        return self::$CUSTOM;
    }
    public static function VENDORGRANT(): Action
    {
        if (!isset(self::$VENDORGRANT)) {
            self::$VENDORGRANT = new Action('vendor_grant');
        }
        return self::$VENDORGRANT;
    }
    public static function WITHDRAW(): Action
    {
        if (!isset(self::$WITHDRAW)) {
            self::$WITHDRAW = new Action('withdraw');
        }
        return self::$WITHDRAW;
    }
    public static function RENEW(): Action
    {
        if (!isset(self::$RENEW)) {
            self::$RENEW = new Action('renew');
        }
        return self::$RENEW;
    }
}