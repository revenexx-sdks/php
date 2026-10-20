<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PreferenceCentreChannel implements JsonSerializable
{
    private static PreferenceCentreChannel $EMAIL;
    private static PreferenceCentreChannel $SMS;
    private static PreferenceCentreChannel $WHATSAPP;

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

    public static function EMAIL(): PreferenceCentreChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new PreferenceCentreChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): PreferenceCentreChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new PreferenceCentreChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): PreferenceCentreChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new PreferenceCentreChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}