<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubmitResultOutcome implements JsonSerializable
{
    private static SubmitResultOutcome $DIRECT;
    private static SubmitResultOutcome $APPROVAL;
    private static SubmitResultOutcome $PREVENT;
    private static SubmitResultOutcome $DECIDED;
    private static SubmitResultOutcome $CURRENCYMISMATCH;

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

    public static function DIRECT(): SubmitResultOutcome
    {
        if (!isset(self::$DIRECT)) {
            self::$DIRECT = new SubmitResultOutcome('direct');
        }
        return self::$DIRECT;
    }
    public static function APPROVAL(): SubmitResultOutcome
    {
        if (!isset(self::$APPROVAL)) {
            self::$APPROVAL = new SubmitResultOutcome('approval');
        }
        return self::$APPROVAL;
    }
    public static function PREVENT(): SubmitResultOutcome
    {
        if (!isset(self::$PREVENT)) {
            self::$PREVENT = new SubmitResultOutcome('prevent');
        }
        return self::$PREVENT;
    }
    public static function DECIDED(): SubmitResultOutcome
    {
        if (!isset(self::$DECIDED)) {
            self::$DECIDED = new SubmitResultOutcome('decided');
        }
        return self::$DECIDED;
    }
    public static function CURRENCYMISMATCH(): SubmitResultOutcome
    {
        if (!isset(self::$CURRENCYMISMATCH)) {
            self::$CURRENCYMISMATCH = new SubmitResultOutcome('currency_mismatch');
        }
        return self::$CURRENCYMISMATCH;
    }
}