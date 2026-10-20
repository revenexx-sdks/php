<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EnrollmentEventKind implements JsonSerializable
{
    private static EnrollmentEventKind $ENTERED;
    private static EnrollmentEventKind $EXECUTED;
    private static EnrollmentEventKind $WAITING;
    private static EnrollmentEventKind $RESUMED;
    private static EnrollmentEventKind $SENT;
    private static EnrollmentEventKind $SKIPPED;
    private static EnrollmentEventKind $CLICKED;
    private static EnrollmentEventKind $OPENED;
    private static EnrollmentEventKind $GOALREACHED;
    private static EnrollmentEventKind $COMPLETED;
    private static EnrollmentEventKind $EXITED;
    private static EnrollmentEventKind $FAILED;

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

    public static function ENTERED(): EnrollmentEventKind
    {
        if (!isset(self::$ENTERED)) {
            self::$ENTERED = new EnrollmentEventKind('entered');
        }
        return self::$ENTERED;
    }
    public static function EXECUTED(): EnrollmentEventKind
    {
        if (!isset(self::$EXECUTED)) {
            self::$EXECUTED = new EnrollmentEventKind('executed');
        }
        return self::$EXECUTED;
    }
    public static function WAITING(): EnrollmentEventKind
    {
        if (!isset(self::$WAITING)) {
            self::$WAITING = new EnrollmentEventKind('waiting');
        }
        return self::$WAITING;
    }
    public static function RESUMED(): EnrollmentEventKind
    {
        if (!isset(self::$RESUMED)) {
            self::$RESUMED = new EnrollmentEventKind('resumed');
        }
        return self::$RESUMED;
    }
    public static function SENT(): EnrollmentEventKind
    {
        if (!isset(self::$SENT)) {
            self::$SENT = new EnrollmentEventKind('sent');
        }
        return self::$SENT;
    }
    public static function SKIPPED(): EnrollmentEventKind
    {
        if (!isset(self::$SKIPPED)) {
            self::$SKIPPED = new EnrollmentEventKind('skipped');
        }
        return self::$SKIPPED;
    }
    public static function CLICKED(): EnrollmentEventKind
    {
        if (!isset(self::$CLICKED)) {
            self::$CLICKED = new EnrollmentEventKind('clicked');
        }
        return self::$CLICKED;
    }
    public static function OPENED(): EnrollmentEventKind
    {
        if (!isset(self::$OPENED)) {
            self::$OPENED = new EnrollmentEventKind('opened');
        }
        return self::$OPENED;
    }
    public static function GOALREACHED(): EnrollmentEventKind
    {
        if (!isset(self::$GOALREACHED)) {
            self::$GOALREACHED = new EnrollmentEventKind('goal_reached');
        }
        return self::$GOALREACHED;
    }
    public static function COMPLETED(): EnrollmentEventKind
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new EnrollmentEventKind('completed');
        }
        return self::$COMPLETED;
    }
    public static function EXITED(): EnrollmentEventKind
    {
        if (!isset(self::$EXITED)) {
            self::$EXITED = new EnrollmentEventKind('exited');
        }
        return self::$EXITED;
    }
    public static function FAILED(): EnrollmentEventKind
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new EnrollmentEventKind('failed');
        }
        return self::$FAILED;
    }
}