<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Channel implements JsonSerializable
{
    private static Channel $EMAIL;
    private static Channel $SMS;
    private static Channel $WHATSAPP;

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

    public static function EMAIL(): Channel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new Channel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): Channel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new Channel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): Channel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new Channel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}