<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BudgetReleaseProblemCode implements JsonSerializable
{
    private static BudgetReleaseProblemCode $COSTCENTERCLOSED;
    private static BudgetReleaseProblemCode $CURRENCYMISMATCH;
    private static BudgetReleaseProblemCode $REFUSED;

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

    public static function COSTCENTERCLOSED(): BudgetReleaseProblemCode
    {
        if (!isset(self::$COSTCENTERCLOSED)) {
            self::$COSTCENTERCLOSED = new BudgetReleaseProblemCode('cost_center_closed');
        }
        return self::$COSTCENTERCLOSED;
    }
    public static function CURRENCYMISMATCH(): BudgetReleaseProblemCode
    {
        if (!isset(self::$CURRENCYMISMATCH)) {
            self::$CURRENCYMISMATCH = new BudgetReleaseProblemCode('currency_mismatch');
        }
        return self::$CURRENCYMISMATCH;
    }
    public static function REFUSED(): BudgetReleaseProblemCode
    {
        if (!isset(self::$REFUSED)) {
            self::$REFUSED = new BudgetReleaseProblemCode('refused');
        }
        return self::$REFUSED;
    }
}