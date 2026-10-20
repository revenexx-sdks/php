<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleStageCreateRequestTone implements JsonSerializable
{
    private static ContactLifecycleStageCreateRequestTone $NEUTRAL;
    private static ContactLifecycleStageCreateRequestTone $INFO;
    private static ContactLifecycleStageCreateRequestTone $SUCCESS;
    private static ContactLifecycleStageCreateRequestTone $WARNING;
    private static ContactLifecycleStageCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): ContactLifecycleStageCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactLifecycleStageCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactLifecycleStageCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactLifecycleStageCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactLifecycleStageCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactLifecycleStageCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactLifecycleStageCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactLifecycleStageCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactLifecycleStageCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactLifecycleStageCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}