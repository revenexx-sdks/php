<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCenterUpdateRequestBudgetType implements JsonSerializable
{
    private static CostCenterUpdateRequestBudgetType $MONETARY;
    private static CostCenterUpdateRequestBudgetType $TRACKINGONLY;

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

    public static function MONETARY(): CostCenterUpdateRequestBudgetType
    {
        if (!isset(self::$MONETARY)) {
            self::$MONETARY = new CostCenterUpdateRequestBudgetType('monetary');
        }
        return self::$MONETARY;
    }
    public static function TRACKINGONLY(): CostCenterUpdateRequestBudgetType
    {
        if (!isset(self::$TRACKINGONLY)) {
            self::$TRACKINGONLY = new CostCenterUpdateRequestBudgetType('tracking_only');
        }
        return self::$TRACKINGONLY;
    }
}