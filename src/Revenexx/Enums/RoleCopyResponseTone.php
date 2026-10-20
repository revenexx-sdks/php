<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RoleCopyResponseTone implements JsonSerializable
{
    private static RoleCopyResponseTone $NEUTRAL;
    private static RoleCopyResponseTone $INFO;
    private static RoleCopyResponseTone $SUCCESS;
    private static RoleCopyResponseTone $WARNING;
    private static RoleCopyResponseTone $DANGER;

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

    public static function NEUTRAL(): RoleCopyResponseTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new RoleCopyResponseTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): RoleCopyResponseTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new RoleCopyResponseTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): RoleCopyResponseTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new RoleCopyResponseTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): RoleCopyResponseTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new RoleCopyResponseTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): RoleCopyResponseTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new RoleCopyResponseTone('danger');
        }
        return self::$DANGER;
    }
}