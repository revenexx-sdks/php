<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BudgetMovementResultStatus implements JsonSerializable
{
    private static BudgetMovementResultStatus $RESERVED;
    private static BudgetMovementResultStatus $CONFIRMED;
    private static BudgetMovementResultStatus $WITHDRAWN;
    private static BudgetMovementResultStatus $COMMITTED;

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

    public static function RESERVED(): BudgetMovementResultStatus
    {
        if (!isset(self::$RESERVED)) {
            self::$RESERVED = new BudgetMovementResultStatus('reserved');
        }
        return self::$RESERVED;
    }
    public static function CONFIRMED(): BudgetMovementResultStatus
    {
        if (!isset(self::$CONFIRMED)) {
            self::$CONFIRMED = new BudgetMovementResultStatus('confirmed');
        }
        return self::$CONFIRMED;
    }
    public static function WITHDRAWN(): BudgetMovementResultStatus
    {
        if (!isset(self::$WITHDRAWN)) {
            self::$WITHDRAWN = new BudgetMovementResultStatus('withdrawn');
        }
        return self::$WITHDRAWN;
    }
    public static function COMMITTED(): BudgetMovementResultStatus
    {
        if (!isset(self::$COMMITTED)) {
            self::$COMMITTED = new BudgetMovementResultStatus('committed');
        }
        return self::$COMMITTED;
    }
}