<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCenterBudgetType implements JsonSerializable
{
    private static CostCenterBudgetType $MONETARY;

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

    public static function MONETARY(): CostCenterBudgetType
    {
        if (!isset(self::$MONETARY)) {
            self::$MONETARY = new CostCenterBudgetType('monetary');
        }
        return self::$MONETARY;
    }
}