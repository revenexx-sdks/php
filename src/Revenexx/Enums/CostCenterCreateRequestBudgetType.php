<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCenterCreateRequestBudgetType implements JsonSerializable
{
    private static CostCenterCreateRequestBudgetType $MONETARY;
    private static CostCenterCreateRequestBudgetType $TRACKINGONLY;

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

    public static function MONETARY(): CostCenterCreateRequestBudgetType
    {
        if (!isset(self::$MONETARY)) {
            self::$MONETARY = new CostCenterCreateRequestBudgetType('monetary');
        }
        return self::$MONETARY;
    }
    public static function TRACKINGONLY(): CostCenterCreateRequestBudgetType
    {
        if (!isset(self::$TRACKINGONLY)) {
            self::$TRACKINGONLY = new CostCenterCreateRequestBudgetType('tracking_only');
        }
        return self::$TRACKINGONLY;
    }
}