<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactRegistrationStatus implements JsonSerializable
{
    private static ContactRegistrationStatus $PENDING;
    private static ContactRegistrationStatus $APPROVED;
    private static ContactRegistrationStatus $REJECTED;

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

    public static function PENDING(): ContactRegistrationStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ContactRegistrationStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): ContactRegistrationStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new ContactRegistrationStatus('approved');
        }
        return self::$APPROVED;
    }
    public static function REJECTED(): ContactRegistrationStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new ContactRegistrationStatus('rejected');
        }
        return self::$REJECTED;
    }
}