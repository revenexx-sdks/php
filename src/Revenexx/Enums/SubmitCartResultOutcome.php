<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubmitCartResultOutcome implements JsonSerializable
{
    private static SubmitCartResultOutcome $DIRECT;
    private static SubmitCartResultOutcome $APPROVAL;
    private static SubmitCartResultOutcome $PREVENT;
    private static SubmitCartResultOutcome $DECIDED;
    private static SubmitCartResultOutcome $CURRENCYMISMATCH;
    private static SubmitCartResultOutcome $NOBUDGET;

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

    public static function DIRECT(): SubmitCartResultOutcome
    {
        if (!isset(self::$DIRECT)) {
            self::$DIRECT = new SubmitCartResultOutcome('direct');
        }
        return self::$DIRECT;
    }
    public static function APPROVAL(): SubmitCartResultOutcome
    {
        if (!isset(self::$APPROVAL)) {
            self::$APPROVAL = new SubmitCartResultOutcome('approval');
        }
        return self::$APPROVAL;
    }
    public static function PREVENT(): SubmitCartResultOutcome
    {
        if (!isset(self::$PREVENT)) {
            self::$PREVENT = new SubmitCartResultOutcome('prevent');
        }
        return self::$PREVENT;
    }
    public static function DECIDED(): SubmitCartResultOutcome
    {
        if (!isset(self::$DECIDED)) {
            self::$DECIDED = new SubmitCartResultOutcome('decided');
        }
        return self::$DECIDED;
    }
    public static function CURRENCYMISMATCH(): SubmitCartResultOutcome
    {
        if (!isset(self::$CURRENCYMISMATCH)) {
            self::$CURRENCYMISMATCH = new SubmitCartResultOutcome('currency_mismatch');
        }
        return self::$CURRENCYMISMATCH;
    }
    public static function NOBUDGET(): SubmitCartResultOutcome
    {
        if (!isset(self::$NOBUDGET)) {
            self::$NOBUDGET = new SubmitCartResultOutcome('no_budget');
        }
        return self::$NOBUDGET;
    }
}