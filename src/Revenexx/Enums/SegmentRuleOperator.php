<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRuleOperator implements JsonSerializable
{
    private static SegmentRuleOperator $EQ;
    private static SegmentRuleOperator $NEQ;
    private static SegmentRuleOperator $GT;
    private static SegmentRuleOperator $GTE;
    private static SegmentRuleOperator $LT;
    private static SegmentRuleOperator $LTE;
    private static SegmentRuleOperator $IN;
    private static SegmentRuleOperator $CONTAINS;
    private static SegmentRuleOperator $STARTSWITH;
    private static SegmentRuleOperator $ENDSWITH;
    private static SegmentRuleOperator $ISEMPTY;
    private static SegmentRuleOperator $ISNOTEMPTY;

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

    public static function EQ(): SegmentRuleOperator
    {
        if (!isset(self::$EQ)) {
            self::$EQ = new SegmentRuleOperator('eq');
        }
        return self::$EQ;
    }
    public static function NEQ(): SegmentRuleOperator
    {
        if (!isset(self::$NEQ)) {
            self::$NEQ = new SegmentRuleOperator('neq');
        }
        return self::$NEQ;
    }
    public static function GT(): SegmentRuleOperator
    {
        if (!isset(self::$GT)) {
            self::$GT = new SegmentRuleOperator('gt');
        }
        return self::$GT;
    }
    public static function GTE(): SegmentRuleOperator
    {
        if (!isset(self::$GTE)) {
            self::$GTE = new SegmentRuleOperator('gte');
        }
        return self::$GTE;
    }
    public static function LT(): SegmentRuleOperator
    {
        if (!isset(self::$LT)) {
            self::$LT = new SegmentRuleOperator('lt');
        }
        return self::$LT;
    }
    public static function LTE(): SegmentRuleOperator
    {
        if (!isset(self::$LTE)) {
            self::$LTE = new SegmentRuleOperator('lte');
        }
        return self::$LTE;
    }
    public static function IN(): SegmentRuleOperator
    {
        if (!isset(self::$IN)) {
            self::$IN = new SegmentRuleOperator('in');
        }
        return self::$IN;
    }
    public static function CONTAINS(): SegmentRuleOperator
    {
        if (!isset(self::$CONTAINS)) {
            self::$CONTAINS = new SegmentRuleOperator('contains');
        }
        return self::$CONTAINS;
    }
    public static function STARTSWITH(): SegmentRuleOperator
    {
        if (!isset(self::$STARTSWITH)) {
            self::$STARTSWITH = new SegmentRuleOperator('starts_with');
        }
        return self::$STARTSWITH;
    }
    public static function ENDSWITH(): SegmentRuleOperator
    {
        if (!isset(self::$ENDSWITH)) {
            self::$ENDSWITH = new SegmentRuleOperator('ends_with');
        }
        return self::$ENDSWITH;
    }
    public static function ISEMPTY(): SegmentRuleOperator
    {
        if (!isset(self::$ISEMPTY)) {
            self::$ISEMPTY = new SegmentRuleOperator('is_empty');
        }
        return self::$ISEMPTY;
    }
    public static function ISNOTEMPTY(): SegmentRuleOperator
    {
        if (!isset(self::$ISNOTEMPTY)) {
            self::$ISNOTEMPTY = new SegmentRuleOperator('is_not_empty');
        }
        return self::$ISNOTEMPTY;
    }
}