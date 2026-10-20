<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleStageUpdateRequestTone implements JsonSerializable
{
    private static ContactLifecycleStageUpdateRequestTone $NEUTRAL;
    private static ContactLifecycleStageUpdateRequestTone $INFO;
    private static ContactLifecycleStageUpdateRequestTone $SUCCESS;
    private static ContactLifecycleStageUpdateRequestTone $WARNING;
    private static ContactLifecycleStageUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): ContactLifecycleStageUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactLifecycleStageUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactLifecycleStageUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactLifecycleStageUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactLifecycleStageUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactLifecycleStageUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactLifecycleStageUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactLifecycleStageUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactLifecycleStageUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactLifecycleStageUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}