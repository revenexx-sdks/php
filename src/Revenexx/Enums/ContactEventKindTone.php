<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactEventKindTone implements JsonSerializable
{
    private static ContactEventKindTone $NEUTRAL;
    private static ContactEventKindTone $INFO;
    private static ContactEventKindTone $SUCCESS;
    private static ContactEventKindTone $WARNING;
    private static ContactEventKindTone $DANGER;

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

    public static function NEUTRAL(): ContactEventKindTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactEventKindTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactEventKindTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactEventKindTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactEventKindTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactEventKindTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactEventKindTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactEventKindTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactEventKindTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactEventKindTone('danger');
        }
        return self::$DANGER;
    }
}