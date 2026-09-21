<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionPatchRecurrenceKind implements JsonSerializable
{
    private static PromotionPatchRecurrenceKind $NONE;
    private static PromotionPatchRecurrenceKind $WEEKDAYS;
    private static PromotionPatchRecurrenceKind $DAYSOFMONTH;

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

    public static function NONE(): PromotionPatchRecurrenceKind
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new PromotionPatchRecurrenceKind('none');
        }
        return self::$NONE;
    }
    public static function WEEKDAYS(): PromotionPatchRecurrenceKind
    {
        if (!isset(self::$WEEKDAYS)) {
            self::$WEEKDAYS = new PromotionPatchRecurrenceKind('weekdays');
        }
        return self::$WEEKDAYS;
    }
    public static function DAYSOFMONTH(): PromotionPatchRecurrenceKind
    {
        if (!isset(self::$DAYSOFMONTH)) {
            self::$DAYSOFMONTH = new PromotionPatchRecurrenceKind('days_of_month');
        }
        return self::$DAYSOFMONTH;
    }
}