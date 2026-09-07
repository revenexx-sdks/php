<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Effect implements JsonSerializable
{
    private static Effect $PENDINGORDER;
    private static Effect $PREVENT;
    private static Effect $SENDEMAIL;

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

    public static function PENDINGORDER(): Effect
    {
        if (!isset(self::$PENDINGORDER)) {
            self::$PENDINGORDER = new Effect('pendingOrder');
        }
        return self::$PENDINGORDER;
    }
    public static function PREVENT(): Effect
    {
        if (!isset(self::$PREVENT)) {
            self::$PREVENT = new Effect('prevent');
        }
        return self::$PREVENT;
    }
    public static function SENDEMAIL(): Effect
    {
        if (!isset(self::$SENDEMAIL)) {
            self::$SENDEMAIL = new Effect('sendEmail');
        }
        return self::$SENDEMAIL;
    }
}