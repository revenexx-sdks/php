<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RoleUpdateResponseTone implements JsonSerializable
{
    private static RoleUpdateResponseTone $NEUTRAL;
    private static RoleUpdateResponseTone $INFO;
    private static RoleUpdateResponseTone $SUCCESS;
    private static RoleUpdateResponseTone $WARNING;
    private static RoleUpdateResponseTone $DANGER;

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

    public static function NEUTRAL(): RoleUpdateResponseTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new RoleUpdateResponseTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): RoleUpdateResponseTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new RoleUpdateResponseTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): RoleUpdateResponseTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new RoleUpdateResponseTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): RoleUpdateResponseTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new RoleUpdateResponseTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): RoleUpdateResponseTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new RoleUpdateResponseTone('danger');
        }
        return self::$DANGER;
    }
}