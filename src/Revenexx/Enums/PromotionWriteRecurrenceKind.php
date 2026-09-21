<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionWriteRecurrenceKind implements JsonSerializable
{
    private static PromotionWriteRecurrenceKind $NONE;
    private static PromotionWriteRecurrenceKind $WEEKDAYS;
    private static PromotionWriteRecurrenceKind $DAYSOFMONTH;

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

    public static function NONE(): PromotionWriteRecurrenceKind
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new PromotionWriteRecurrenceKind('none');
        }
        return self::$NONE;
    }
    public static function WEEKDAYS(): PromotionWriteRecurrenceKind
    {
        if (!isset(self::$WEEKDAYS)) {
            self::$WEEKDAYS = new PromotionWriteRecurrenceKind('weekdays');
        }
        return self::$WEEKDAYS;
    }
    public static function DAYSOFMONTH(): PromotionWriteRecurrenceKind
    {
        if (!isset(self::$DAYSOFMONTH)) {
            self::$DAYSOFMONTH = new PromotionWriteRecurrenceKind('days_of_month');
        }
        return self::$DAYSOFMONTH;
    }
}