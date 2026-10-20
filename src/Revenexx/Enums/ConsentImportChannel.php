<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentImportChannel implements JsonSerializable
{
    private static ConsentImportChannel $EMAIL;
    private static ConsentImportChannel $SMS;
    private static ConsentImportChannel $WHATSAPP;

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

    public static function EMAIL(): ConsentImportChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new ConsentImportChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): ConsentImportChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new ConsentImportChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): ConsentImportChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new ConsentImportChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}