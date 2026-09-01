<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactCreateRequestRegistrationStatus implements JsonSerializable
{
    private static ContactCreateRequestRegistrationStatus $PENDING;
    private static ContactCreateRequestRegistrationStatus $APPROVED;

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

    public static function PENDING(): ContactCreateRequestRegistrationStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ContactCreateRequestRegistrationStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): ContactCreateRequestRegistrationStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new ContactCreateRequestRegistrationStatus('approved');
        }
        return self::$APPROVED;
    }
}