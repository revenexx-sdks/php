<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleStageTone implements JsonSerializable
{
    private static ContactLifecycleStageTone $NEUTRAL;
    private static ContactLifecycleStageTone $INFO;
    private static ContactLifecycleStageTone $SUCCESS;
    private static ContactLifecycleStageTone $WARNING;
    private static ContactLifecycleStageTone $DANGER;

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

    public static function NEUTRAL(): ContactLifecycleStageTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactLifecycleStageTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactLifecycleStageTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactLifecycleStageTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactLifecycleStageTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactLifecycleStageTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactLifecycleStageTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactLifecycleStageTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactLifecycleStageTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactLifecycleStageTone('danger');
        }
        return self::$DANGER;
    }
}