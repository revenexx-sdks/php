<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ContactRole implements JsonSerializable
{
    private static ContactRole $BUYER;
    private static ContactRole $APPROVER;
    private static ContactRole $ADMIN;
    private static ContactRole $REQUESTER;

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

    public static function BUYER(): ContactRole
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new ContactRole('buyer');
        }
        return self::$BUYER;
    }
    public static function APPROVER(): ContactRole
    {
        if (!isset(self::$APPROVER)) {
            self::$APPROVER = new ContactRole('approver');
        }
        return self::$APPROVER;
    }
    public static function ADMIN(): ContactRole
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new ContactRole('admin');
        }
        return self::$ADMIN;
    }
    public static function REQUESTER(): ContactRole
    {
        if (!isset(self::$REQUESTER)) {
            self::$REQUESTER = new ContactRole('requester');
        }
        return self::$REQUESTER;
    }
}