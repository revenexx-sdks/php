<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PreferenceUpdateResponseChannel implements JsonSerializable
{
    private static PreferenceUpdateResponseChannel $EMAIL;
    private static PreferenceUpdateResponseChannel $SMS;
    private static PreferenceUpdateResponseChannel $WHATSAPP;

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

    public static function EMAIL(): PreferenceUpdateResponseChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new PreferenceUpdateResponseChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): PreferenceUpdateResponseChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new PreferenceUpdateResponseChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): PreferenceUpdateResponseChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new PreferenceUpdateResponseChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}