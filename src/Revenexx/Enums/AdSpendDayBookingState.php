<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AdSpendDayBookingState implements JsonSerializable
{
    private static AdSpendDayBookingState $UNLINKED;
    private static AdSpendDayBookingState $PENDING;
    private static AdSpendDayBookingState $BOOKED;
    private static AdSpendDayBookingState $FAILED;

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

    public static function UNLINKED(): AdSpendDayBookingState
    {
        if (!isset(self::$UNLINKED)) {
            self::$UNLINKED = new AdSpendDayBookingState('unlinked');
        }
        return self::$UNLINKED;
    }
    public static function PENDING(): AdSpendDayBookingState
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new AdSpendDayBookingState('pending');
        }
        return self::$PENDING;
    }
    public static function BOOKED(): AdSpendDayBookingState
    {
        if (!isset(self::$BOOKED)) {
            self::$BOOKED = new AdSpendDayBookingState('booked');
        }
        return self::$BOOKED;
    }
    public static function FAILED(): AdSpendDayBookingState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AdSpendDayBookingState('failed');
        }
        return self::$FAILED;
    }
}