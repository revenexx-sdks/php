<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentImportRequestChannel implements JsonSerializable
{
    private static ConsentImportRequestChannel $EMAIL;
    private static ConsentImportRequestChannel $SMS;
    private static ConsentImportRequestChannel $WHATSAPP;

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

    public static function EMAIL(): ConsentImportRequestChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new ConsentImportRequestChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): ConsentImportRequestChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new ConsentImportRequestChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): ConsentImportRequestChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new ConsentImportRequestChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}