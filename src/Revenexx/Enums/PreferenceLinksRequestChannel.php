<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PreferenceLinksRequestChannel implements JsonSerializable
{
    private static PreferenceLinksRequestChannel $EMAIL;
    private static PreferenceLinksRequestChannel $SMS;
    private static PreferenceLinksRequestChannel $WHATSAPP;

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

    public static function EMAIL(): PreferenceLinksRequestChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new PreferenceLinksRequestChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): PreferenceLinksRequestChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new PreferenceLinksRequestChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): PreferenceLinksRequestChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new PreferenceLinksRequestChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}