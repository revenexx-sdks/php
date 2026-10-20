<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Channels implements JsonSerializable
{
    private static Channels $EMAIL;
    private static Channels $SMS;
    private static Channels $WHATSAPP;

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

    public static function EMAIL(): Channels
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new Channels('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): Channels
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new Channels('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): Channels
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new Channels('whatsapp');
        }
        return self::$WHATSAPP;
    }
}