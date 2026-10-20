<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EligibilityResponseChannel implements JsonSerializable
{
    private static EligibilityResponseChannel $EMAIL;
    private static EligibilityResponseChannel $SMS;
    private static EligibilityResponseChannel $WHATSAPP;

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

    public static function EMAIL(): EligibilityResponseChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new EligibilityResponseChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): EligibilityResponseChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new EligibilityResponseChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): EligibilityResponseChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new EligibilityResponseChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}