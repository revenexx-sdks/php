<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BudgetChangeReason implements JsonSerializable
{
    private static BudgetChangeReason $INITIALIZED;
    private static BudgetChangeReason $ORDER;
    private static BudgetChangeReason $RESERVATION;
    private static BudgetChangeReason $WITHDRAWAL;
    private static BudgetChangeReason $MANUAL;
    private static BudgetChangeReason $ROLLOVER;
    private static BudgetChangeReason $LAPSED;

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

    public static function INITIALIZED(): BudgetChangeReason
    {
        if (!isset(self::$INITIALIZED)) {
            self::$INITIALIZED = new BudgetChangeReason('initialized');
        }
        return self::$INITIALIZED;
    }
    public static function ORDER(): BudgetChangeReason
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new BudgetChangeReason('order');
        }
        return self::$ORDER;
    }
    public static function RESERVATION(): BudgetChangeReason
    {
        if (!isset(self::$RESERVATION)) {
            self::$RESERVATION = new BudgetChangeReason('reservation');
        }
        return self::$RESERVATION;
    }
    public static function WITHDRAWAL(): BudgetChangeReason
    {
        if (!isset(self::$WITHDRAWAL)) {
            self::$WITHDRAWAL = new BudgetChangeReason('withdrawal');
        }
        return self::$WITHDRAWAL;
    }
    public static function MANUAL(): BudgetChangeReason
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new BudgetChangeReason('manual');
        }
        return self::$MANUAL;
    }
    public static function ROLLOVER(): BudgetChangeReason
    {
        if (!isset(self::$ROLLOVER)) {
            self::$ROLLOVER = new BudgetChangeReason('rollover');
        }
        return self::$ROLLOVER;
    }
    public static function LAPSED(): BudgetChangeReason
    {
        if (!isset(self::$LAPSED)) {
            self::$LAPSED = new BudgetChangeReason('lapsed');
        }
        return self::$LAPSED;
    }
}