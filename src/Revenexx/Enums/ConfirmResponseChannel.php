<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConfirmResponseChannel implements JsonSerializable
{
    private static ConfirmResponseChannel $EMAIL;
    private static ConfirmResponseChannel $SMS;
    private static ConfirmResponseChannel $WHATSAPP;

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

    public static function EMAIL(): ConfirmResponseChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new ConfirmResponseChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): ConfirmResponseChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new ConfirmResponseChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): ConfirmResponseChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new ConfirmResponseChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}