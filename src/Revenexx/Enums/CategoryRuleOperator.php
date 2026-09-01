<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CategoryRuleOperator implements JsonSerializable
{
    private static CategoryRuleOperator $EQ;
    private static CategoryRuleOperator $NEQ;
    private static CategoryRuleOperator $GT;
    private static CategoryRuleOperator $GTE;
    private static CategoryRuleOperator $LT;
    private static CategoryRuleOperator $LTE;
    private static CategoryRuleOperator $IN;
    private static CategoryRuleOperator $CONTAINS;
    private static CategoryRuleOperator $STARTSWITH;
    private static CategoryRuleOperator $ENDSWITH;
    private static CategoryRuleOperator $ISEMPTY;
    private static CategoryRuleOperator $ISNOTEMPTY;

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

    public static function EQ(): CategoryRuleOperator
    {
        if (!isset(self::$EQ)) {
            self::$EQ = new CategoryRuleOperator('eq');
        }
        return self::$EQ;
    }
    public static function NEQ(): CategoryRuleOperator
    {
        if (!isset(self::$NEQ)) {
            self::$NEQ = new CategoryRuleOperator('neq');
        }
        return self::$NEQ;
    }
    public static function GT(): CategoryRuleOperator
    {
        if (!isset(self::$GT)) {
            self::$GT = new CategoryRuleOperator('gt');
        }
        return self::$GT;
    }
    public static function GTE(): CategoryRuleOperator
    {
        if (!isset(self::$GTE)) {
            self::$GTE = new CategoryRuleOperator('gte');
        }
        return self::$GTE;
    }
    public static function LT(): CategoryRuleOperator
    {
        if (!isset(self::$LT)) {
            self::$LT = new CategoryRuleOperator('lt');
        }
        return self::$LT;
    }
    public static function LTE(): CategoryRuleOperator
    {
        if (!isset(self::$LTE)) {
            self::$LTE = new CategoryRuleOperator('lte');
        }
        return self::$LTE;
    }
    public static function IN(): CategoryRuleOperator
    {
        if (!isset(self::$IN)) {
            self::$IN = new CategoryRuleOperator('in');
        }
        return self::$IN;
    }
    public static function CONTAINS(): CategoryRuleOperator
    {
        if (!isset(self::$CONTAINS)) {
            self::$CONTAINS = new CategoryRuleOperator('contains');
        }
        return self::$CONTAINS;
    }
    public static function STARTSWITH(): CategoryRuleOperator
    {
        if (!isset(self::$STARTSWITH)) {
            self::$STARTSWITH = new CategoryRuleOperator('starts_with');
        }
        return self::$STARTSWITH;
    }
    public static function ENDSWITH(): CategoryRuleOperator
    {
        if (!isset(self::$ENDSWITH)) {
            self::$ENDSWITH = new CategoryRuleOperator('ends_with');
        }
        return self::$ENDSWITH;
    }
    public static function ISEMPTY(): CategoryRuleOperator
    {
        if (!isset(self::$ISEMPTY)) {
            self::$ISEMPTY = new CategoryRuleOperator('is_empty');
        }
        return self::$ISEMPTY;
    }
    public static function ISNOTEMPTY(): CategoryRuleOperator
    {
        if (!isset(self::$ISNOTEMPTY)) {
            self::$ISNOTEMPTY = new CategoryRuleOperator('is_not_empty');
        }
        return self::$ISNOTEMPTY;
    }
}