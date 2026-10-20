<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentEventChannel implements JsonSerializable
{
    private static ConsentEventChannel $EMAIL;
    private static ConsentEventChannel $SMS;
    private static ConsentEventChannel $WHATSAPP;

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

    public static function EMAIL(): ConsentEventChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new ConsentEventChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): ConsentEventChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new ConsentEventChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): ConsentEventChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new ConsentEventChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}