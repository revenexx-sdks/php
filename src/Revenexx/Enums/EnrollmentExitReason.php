<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EnrollmentExitReason implements JsonSerializable
{
    private static EnrollmentExitReason $EXITSTEP;
    private static EnrollmentExitReason $WITHDRAWN;
    private static EnrollmentExitReason $JOURNEYARCHIVED;
    private static EnrollmentExitReason $REMOVED;
    private static EnrollmentExitReason $FAILED;
    private static EnrollmentExitReason $UNRESOLVABLE;

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

    public static function EXITSTEP(): EnrollmentExitReason
    {
        if (!isset(self::$EXITSTEP)) {
            self::$EXITSTEP = new EnrollmentExitReason('exit_step');
        }
        return self::$EXITSTEP;
    }
    public static function WITHDRAWN(): EnrollmentExitReason
    {
        if (!isset(self::$WITHDRAWN)) {
            self::$WITHDRAWN = new EnrollmentExitReason('withdrawn');
        }
        return self::$WITHDRAWN;
    }
    public static function JOURNEYARCHIVED(): EnrollmentExitReason
    {
        if (!isset(self::$JOURNEYARCHIVED)) {
            self::$JOURNEYARCHIVED = new EnrollmentExitReason('journey_archived');
        }
        return self::$JOURNEYARCHIVED;
    }
    public static function REMOVED(): EnrollmentExitReason
    {
        if (!isset(self::$REMOVED)) {
            self::$REMOVED = new EnrollmentExitReason('removed');
        }
        return self::$REMOVED;
    }
    public static function FAILED(): EnrollmentExitReason
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new EnrollmentExitReason('failed');
        }
        return self::$FAILED;
    }
    public static function UNRESOLVABLE(): EnrollmentExitReason
    {
        if (!isset(self::$UNRESOLVABLE)) {
            self::$UNRESOLVABLE = new EnrollmentExitReason('unresolvable');
        }
        return self::$UNRESOLVABLE;
    }
}