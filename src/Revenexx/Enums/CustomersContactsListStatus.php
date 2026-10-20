<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CustomersContactsListStatus implements JsonSerializable
{
    private static CustomersContactsListStatus $INVITED;
    private static CustomersContactsListStatus $ACTIVE;
    private static CustomersContactsListStatus $BLOCKED;

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

    public static function INVITED(): CustomersContactsListStatus
    {
        if (!isset(self::$INVITED)) {
            self::$INVITED = new CustomersContactsListStatus('invited');
        }
        return self::$INVITED;
    }
    public static function ACTIVE(): CustomersContactsListStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new CustomersContactsListStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function BLOCKED(): CustomersContactsListStatus
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new CustomersContactsListStatus('blocked');
        }
        return self::$BLOCKED;
    }
}