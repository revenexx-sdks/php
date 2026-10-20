<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RoleUpdateRequestTone implements JsonSerializable
{
    private static RoleUpdateRequestTone $NEUTRAL;
    private static RoleUpdateRequestTone $INFO;
    private static RoleUpdateRequestTone $SUCCESS;
    private static RoleUpdateRequestTone $WARNING;
    private static RoleUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): RoleUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new RoleUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): RoleUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new RoleUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): RoleUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new RoleUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): RoleUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new RoleUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): RoleUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new RoleUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}