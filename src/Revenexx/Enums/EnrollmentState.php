<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EnrollmentState implements JsonSerializable
{
    private static EnrollmentState $ACTIVE;
    private static EnrollmentState $WAITING;
    private static EnrollmentState $COMPLETED;
    private static EnrollmentState $GOALREACHED;
    private static EnrollmentState $EXITED;
    private static EnrollmentState $FAILED;

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

    public static function ACTIVE(): EnrollmentState
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new EnrollmentState('active');
        }
        return self::$ACTIVE;
    }
    public static function WAITING(): EnrollmentState
    {
        if (!isset(self::$WAITING)) {
            self::$WAITING = new EnrollmentState('waiting');
        }
        return self::$WAITING;
    }
    public static function COMPLETED(): EnrollmentState
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new EnrollmentState('completed');
        }
        return self::$COMPLETED;
    }
    public static function GOALREACHED(): EnrollmentState
    {
        if (!isset(self::$GOALREACHED)) {
            self::$GOALREACHED = new EnrollmentState('goal_reached');
        }
        return self::$GOALREACHED;
    }
    public static function EXITED(): EnrollmentState
    {
        if (!isset(self::$EXITED)) {
            self::$EXITED = new EnrollmentState('exited');
        }
        return self::$EXITED;
    }
    public static function FAILED(): EnrollmentState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new EnrollmentState('failed');
        }
        return self::$FAILED;
    }
}