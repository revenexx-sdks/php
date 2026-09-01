<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactEventKindUpdateRequestTone implements JsonSerializable
{
    private static ContactEventKindUpdateRequestTone $NEUTRAL;
    private static ContactEventKindUpdateRequestTone $INFO;
    private static ContactEventKindUpdateRequestTone $SUCCESS;
    private static ContactEventKindUpdateRequestTone $WARNING;
    private static ContactEventKindUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): ContactEventKindUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactEventKindUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactEventKindUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactEventKindUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactEventKindUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactEventKindUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactEventKindUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactEventKindUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactEventKindUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactEventKindUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}