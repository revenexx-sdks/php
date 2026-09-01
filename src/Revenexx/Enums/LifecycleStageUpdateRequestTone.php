<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LifecycleStageUpdateRequestTone implements JsonSerializable
{
    private static LifecycleStageUpdateRequestTone $NEUTRAL;
    private static LifecycleStageUpdateRequestTone $INFO;
    private static LifecycleStageUpdateRequestTone $SUCCESS;
    private static LifecycleStageUpdateRequestTone $WARNING;
    private static LifecycleStageUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): LifecycleStageUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new LifecycleStageUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): LifecycleStageUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new LifecycleStageUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): LifecycleStageUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new LifecycleStageUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): LifecycleStageUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new LifecycleStageUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): LifecycleStageUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new LifecycleStageUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}