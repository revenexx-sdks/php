<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LifecycleStageTone implements JsonSerializable
{
    private static LifecycleStageTone $NEUTRAL;
    private static LifecycleStageTone $INFO;
    private static LifecycleStageTone $SUCCESS;
    private static LifecycleStageTone $WARNING;
    private static LifecycleStageTone $DANGER;

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

    public static function NEUTRAL(): LifecycleStageTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new LifecycleStageTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): LifecycleStageTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new LifecycleStageTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): LifecycleStageTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new LifecycleStageTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): LifecycleStageTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new LifecycleStageTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): LifecycleStageTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new LifecycleStageTone('danger');
        }
        return self::$DANGER;
    }
}