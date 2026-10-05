<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BudgetReleaseStatus implements JsonSerializable
{
    private static BudgetReleaseStatus $PENDING;
    private static BudgetReleaseStatus $RELEASED;
    private static BudgetReleaseStatus $SKIPPED;
    private static BudgetReleaseStatus $REFUSED;
    private static BudgetReleaseStatus $SETTLED;

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

    public static function PENDING(): BudgetReleaseStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new BudgetReleaseStatus('pending');
        }
        return self::$PENDING;
    }
    public static function RELEASED(): BudgetReleaseStatus
    {
        if (!isset(self::$RELEASED)) {
            self::$RELEASED = new BudgetReleaseStatus('released');
        }
        return self::$RELEASED;
    }
    public static function SKIPPED(): BudgetReleaseStatus
    {
        if (!isset(self::$SKIPPED)) {
            self::$SKIPPED = new BudgetReleaseStatus('skipped');
        }
        return self::$SKIPPED;
    }
    public static function REFUSED(): BudgetReleaseStatus
    {
        if (!isset(self::$REFUSED)) {
            self::$REFUSED = new BudgetReleaseStatus('refused');
        }
        return self::$REFUSED;
    }
    public static function SETTLED(): BudgetReleaseStatus
    {
        if (!isset(self::$SETTLED)) {
            self::$SETTLED = new BudgetReleaseStatus('settled');
        }
        return self::$SETTLED;
    }
}