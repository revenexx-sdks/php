<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AssignmentRoleUpdateRequestTone implements JsonSerializable
{
    private static AssignmentRoleUpdateRequestTone $NEUTRAL;
    private static AssignmentRoleUpdateRequestTone $INFO;
    private static AssignmentRoleUpdateRequestTone $SUCCESS;
    private static AssignmentRoleUpdateRequestTone $WARNING;
    private static AssignmentRoleUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): AssignmentRoleUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new AssignmentRoleUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): AssignmentRoleUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new AssignmentRoleUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): AssignmentRoleUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new AssignmentRoleUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): AssignmentRoleUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new AssignmentRoleUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): AssignmentRoleUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new AssignmentRoleUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}