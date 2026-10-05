<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AssignmentRoleCreateRequestTone implements JsonSerializable
{
    private static AssignmentRoleCreateRequestTone $NEUTRAL;
    private static AssignmentRoleCreateRequestTone $INFO;
    private static AssignmentRoleCreateRequestTone $SUCCESS;
    private static AssignmentRoleCreateRequestTone $WARNING;
    private static AssignmentRoleCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): AssignmentRoleCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new AssignmentRoleCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): AssignmentRoleCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new AssignmentRoleCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): AssignmentRoleCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new AssignmentRoleCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): AssignmentRoleCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new AssignmentRoleCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): AssignmentRoleCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new AssignmentRoleCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}