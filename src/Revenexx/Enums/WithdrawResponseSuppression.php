<?php

namespace Revenexx\Enums;

use JsonSerializable;

class WithdrawResponseSuppression implements JsonSerializable
{
    private static WithdrawResponseSuppression $WRITTEN;
    private static WithdrawResponseSuppression $FAILED;
    private static WithdrawResponseSuppression $SKIPPED;
    private static WithdrawResponseSuppression $BYSEQUENCER;

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

    public static function WRITTEN(): WithdrawResponseSuppression
    {
        if (!isset(self::$WRITTEN)) {
            self::$WRITTEN = new WithdrawResponseSuppression('written');
        }
        return self::$WRITTEN;
    }
    public static function FAILED(): WithdrawResponseSuppression
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new WithdrawResponseSuppression('failed');
        }
        return self::$FAILED;
    }
    public static function SKIPPED(): WithdrawResponseSuppression
    {
        if (!isset(self::$SKIPPED)) {
            self::$SKIPPED = new WithdrawResponseSuppression('skipped');
        }
        return self::$SKIPPED;
    }
    public static function BYSEQUENCER(): WithdrawResponseSuppression
    {
        if (!isset(self::$BYSEQUENCER)) {
            self::$BYSEQUENCER = new WithdrawResponseSuppression('by_sequencer');
        }
        return self::$BYSEQUENCER;
    }
}