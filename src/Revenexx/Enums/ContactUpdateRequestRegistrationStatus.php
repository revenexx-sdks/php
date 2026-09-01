<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactUpdateRequestRegistrationStatus implements JsonSerializable
{
    private static ContactUpdateRequestRegistrationStatus $PENDING;
    private static ContactUpdateRequestRegistrationStatus $APPROVED;

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

    public static function PENDING(): ContactUpdateRequestRegistrationStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ContactUpdateRequestRegistrationStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): ContactUpdateRequestRegistrationStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new ContactUpdateRequestRegistrationStatus('approved');
        }
        return self::$APPROVED;
    }
}