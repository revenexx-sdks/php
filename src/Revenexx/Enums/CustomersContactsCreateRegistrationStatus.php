<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CustomersContactsCreateRegistrationStatus implements JsonSerializable
{
    private static CustomersContactsCreateRegistrationStatus $PENDING;
    private static CustomersContactsCreateRegistrationStatus $APPROVED;

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

    public static function PENDING(): CustomersContactsCreateRegistrationStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new CustomersContactsCreateRegistrationStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): CustomersContactsCreateRegistrationStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new CustomersContactsCreateRegistrationStatus('approved');
        }
        return self::$APPROVED;
    }
}