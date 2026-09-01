<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactEventKindCreateRequestTone implements JsonSerializable
{
    private static ContactEventKindCreateRequestTone $NEUTRAL;
    private static ContactEventKindCreateRequestTone $INFO;
    private static ContactEventKindCreateRequestTone $SUCCESS;
    private static ContactEventKindCreateRequestTone $WARNING;
    private static ContactEventKindCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): ContactEventKindCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactEventKindCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactEventKindCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactEventKindCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactEventKindCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactEventKindCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactEventKindCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactEventKindCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactEventKindCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactEventKindCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}