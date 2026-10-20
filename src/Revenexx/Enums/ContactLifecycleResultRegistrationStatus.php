<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleResultRegistrationStatus implements JsonSerializable
{
    private static ContactLifecycleResultRegistrationStatus $PENDING;
    private static ContactLifecycleResultRegistrationStatus $APPROVED;
    private static ContactLifecycleResultRegistrationStatus $REJECTED;

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

    public static function PENDING(): ContactLifecycleResultRegistrationStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ContactLifecycleResultRegistrationStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): ContactLifecycleResultRegistrationStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new ContactLifecycleResultRegistrationStatus('approved');
        }
        return self::$APPROVED;
    }
    public static function REJECTED(): ContactLifecycleResultRegistrationStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new ContactLifecycleResultRegistrationStatus('rejected');
        }
        return self::$REJECTED;
    }
}