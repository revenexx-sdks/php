<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LifecycleStageCreateRequestTone implements JsonSerializable
{
    private static LifecycleStageCreateRequestTone $NEUTRAL;
    private static LifecycleStageCreateRequestTone $INFO;
    private static LifecycleStageCreateRequestTone $SUCCESS;
    private static LifecycleStageCreateRequestTone $WARNING;
    private static LifecycleStageCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): LifecycleStageCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new LifecycleStageCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): LifecycleStageCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new LifecycleStageCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): LifecycleStageCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new LifecycleStageCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): LifecycleStageCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new LifecycleStageCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): LifecycleStageCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new LifecycleStageCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}