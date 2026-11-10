<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BudgetReleaseScope implements JsonSerializable
{
    private static BudgetReleaseScope $ORDER;
    private static BudgetReleaseScope $ITEM;
    private static BudgetReleaseScope $RETURN;

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

    public static function ORDER(): BudgetReleaseScope
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new BudgetReleaseScope('order');
        }
        return self::$ORDER;
    }
    public static function ITEM(): BudgetReleaseScope
    {
        if (!isset(self::$ITEM)) {
            self::$ITEM = new BudgetReleaseScope('item');
        }
        return self::$ITEM;
    }
    public static function RETURN(): BudgetReleaseScope
    {
        if (!isset(self::$RETURN)) {
            self::$RETURN = new BudgetReleaseScope('return');
        }
        return self::$RETURN;
    }
}
