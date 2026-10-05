<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BudgetType implements JsonSerializable
{
    private static BudgetType $MONETARY;
    private static BudgetType $TRACKINGONLY;

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

    public static function MONETARY(): BudgetType
    {
        if (!isset(self::$MONETARY)) {
            self::$MONETARY = new BudgetType('monetary');
        }
        return self::$MONETARY;
    }
    public static function TRACKINGONLY(): BudgetType
    {
        if (!isset(self::$TRACKINGONLY)) {
            self::$TRACKINGONLY = new BudgetType('tracking_only');
        }
        return self::$TRACKINGONLY;
    }
}