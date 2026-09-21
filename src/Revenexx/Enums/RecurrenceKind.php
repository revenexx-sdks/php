<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RecurrenceKind implements JsonSerializable
{
    private static RecurrenceKind $NONE;
    private static RecurrenceKind $WEEKDAYS;
    private static RecurrenceKind $DAYSOFMONTH;

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

    public static function NONE(): RecurrenceKind
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new RecurrenceKind('none');
        }
        return self::$NONE;
    }
    public static function WEEKDAYS(): RecurrenceKind
    {
        if (!isset(self::$WEEKDAYS)) {
            self::$WEEKDAYS = new RecurrenceKind('weekdays');
        }
        return self::$WEEKDAYS;
    }
    public static function DAYSOFMONTH(): RecurrenceKind
    {
        if (!isset(self::$DAYSOFMONTH)) {
            self::$DAYSOFMONTH = new RecurrenceKind('days_of_month');
        }
        return self::$DAYSOFMONTH;
    }
}