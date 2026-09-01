<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RegistrationStatus implements JsonSerializable
{
    private static RegistrationStatus $PENDING;
    private static RegistrationStatus $APPROVED;
    private static RegistrationStatus $REJECTED;

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

    public static function PENDING(): RegistrationStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new RegistrationStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): RegistrationStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new RegistrationStatus('approved');
        }
        return self::$APPROVED;
    }
    public static function REJECTED(): RegistrationStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new RegistrationStatus('rejected');
        }
        return self::$REJECTED;
    }
}