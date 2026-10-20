<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EligibilityRequestChannel implements JsonSerializable
{
    private static EligibilityRequestChannel $EMAIL;
    private static EligibilityRequestChannel $SMS;
    private static EligibilityRequestChannel $WHATSAPP;

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

    public static function EMAIL(): EligibilityRequestChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new EligibilityRequestChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): EligibilityRequestChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new EligibilityRequestChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): EligibilityRequestChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new EligibilityRequestChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}