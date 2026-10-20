<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactRevokeAccessRequestReason implements JsonSerializable
{
    private static ContactRevokeAccessRequestReason $LEFTCOMPANY;
    private static ContactRevokeAccessRequestReason $MISUSE;
    private static ContactRevokeAccessRequestReason $CUSTOMERREQUEST;
    private static ContactRevokeAccessRequestReason $OTHER;

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

    public static function LEFTCOMPANY(): ContactRevokeAccessRequestReason
    {
        if (!isset(self::$LEFTCOMPANY)) {
            self::$LEFTCOMPANY = new ContactRevokeAccessRequestReason('left_company');
        }
        return self::$LEFTCOMPANY;
    }
    public static function MISUSE(): ContactRevokeAccessRequestReason
    {
        if (!isset(self::$MISUSE)) {
            self::$MISUSE = new ContactRevokeAccessRequestReason('misuse');
        }
        return self::$MISUSE;
    }
    public static function CUSTOMERREQUEST(): ContactRevokeAccessRequestReason
    {
        if (!isset(self::$CUSTOMERREQUEST)) {
            self::$CUSTOMERREQUEST = new ContactRevokeAccessRequestReason('customer_request');
        }
        return self::$CUSTOMERREQUEST;
    }
    public static function OTHER(): ContactRevokeAccessRequestReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new ContactRevokeAccessRequestReason('other');
        }
        return self::$OTHER;
    }
}