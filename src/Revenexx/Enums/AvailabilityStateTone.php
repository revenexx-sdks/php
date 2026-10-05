<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AvailabilityStateTone implements JsonSerializable
{
    private static AvailabilityStateTone $NEUTRAL;
    private static AvailabilityStateTone $INFO;
    private static AvailabilityStateTone $SUCCESS;
    private static AvailabilityStateTone $WARNING;
    private static AvailabilityStateTone $DANGER;

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

    public static function NEUTRAL(): AvailabilityStateTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new AvailabilityStateTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): AvailabilityStateTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new AvailabilityStateTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): AvailabilityStateTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new AvailabilityStateTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): AvailabilityStateTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new AvailabilityStateTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): AvailabilityStateTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new AvailabilityStateTone('danger');
        }
        return self::$DANGER;
    }
}