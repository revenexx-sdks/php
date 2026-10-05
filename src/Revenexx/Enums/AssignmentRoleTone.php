<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AssignmentRoleTone implements JsonSerializable
{
    private static AssignmentRoleTone $NEUTRAL;
    private static AssignmentRoleTone $INFO;
    private static AssignmentRoleTone $SUCCESS;
    private static AssignmentRoleTone $WARNING;
    private static AssignmentRoleTone $DANGER;

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

    public static function NEUTRAL(): AssignmentRoleTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new AssignmentRoleTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): AssignmentRoleTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new AssignmentRoleTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): AssignmentRoleTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new AssignmentRoleTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): AssignmentRoleTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new AssignmentRoleTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): AssignmentRoleTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new AssignmentRoleTone('danger');
        }
        return self::$DANGER;
    }
}