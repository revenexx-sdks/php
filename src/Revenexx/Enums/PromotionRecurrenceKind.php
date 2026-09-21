<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionRecurrenceKind implements JsonSerializable
{
    private static PromotionRecurrenceKind $NONE;
    private static PromotionRecurrenceKind $WEEKDAYS;
    private static PromotionRecurrenceKind $DAYSOFMONTH;

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

    public static function NONE(): PromotionRecurrenceKind
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new PromotionRecurrenceKind('none');
        }
        return self::$NONE;
    }
    public static function WEEKDAYS(): PromotionRecurrenceKind
    {
        if (!isset(self::$WEEKDAYS)) {
            self::$WEEKDAYS = new PromotionRecurrenceKind('weekdays');
        }
        return self::$WEEKDAYS;
    }
    public static function DAYSOFMONTH(): PromotionRecurrenceKind
    {
        if (!isset(self::$DAYSOFMONTH)) {
            self::$DAYSOFMONTH = new PromotionRecurrenceKind('days_of_month');
        }
        return self::$DAYSOFMONTH;
    }
}