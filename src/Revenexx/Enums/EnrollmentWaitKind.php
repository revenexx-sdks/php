<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EnrollmentWaitKind implements JsonSerializable
{
    private static EnrollmentWaitKind $DURATION;
    private static EnrollmentWaitKind $TIME;
    private static EnrollmentWaitKind $EVENT;

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

    public static function DURATION(): EnrollmentWaitKind
    {
        if (!isset(self::$DURATION)) {
            self::$DURATION = new EnrollmentWaitKind('duration');
        }
        return self::$DURATION;
    }
    public static function TIME(): EnrollmentWaitKind
    {
        if (!isset(self::$TIME)) {
            self::$TIME = new EnrollmentWaitKind('time');
        }
        return self::$TIME;
    }
    public static function EVENT(): EnrollmentWaitKind
    {
        if (!isset(self::$EVENT)) {
            self::$EVENT = new EnrollmentWaitKind('event');
        }
        return self::$EVENT;
    }
}