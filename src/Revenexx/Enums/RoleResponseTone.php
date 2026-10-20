<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RoleResponseTone implements JsonSerializable
{
    private static RoleResponseTone $NEUTRAL;
    private static RoleResponseTone $INFO;
    private static RoleResponseTone $SUCCESS;
    private static RoleResponseTone $WARNING;
    private static RoleResponseTone $DANGER;

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

    public static function NEUTRAL(): RoleResponseTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new RoleResponseTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): RoleResponseTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new RoleResponseTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): RoleResponseTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new RoleResponseTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): RoleResponseTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new RoleResponseTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): RoleResponseTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new RoleResponseTone('danger');
        }
        return self::$DANGER;
    }
}