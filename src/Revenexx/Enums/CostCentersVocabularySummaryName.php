<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCentersVocabularySummaryName implements JsonSerializable
{
    private static CostCentersVocabularySummaryName $BUDGETCHANGEREASONS;
    private static CostCentersVocabularySummaryName $BUDGETTYPES;
    private static CostCentersVocabularySummaryName $PUNCHOUTMODES;
    private static CostCentersVocabularySummaryName $RESTRICTIONTYPES;

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

    public static function BUDGETCHANGEREASONS(): CostCentersVocabularySummaryName
    {
        if (!isset(self::$BUDGETCHANGEREASONS)) {
            self::$BUDGETCHANGEREASONS = new CostCentersVocabularySummaryName('budget-change-reasons');
        }
        return self::$BUDGETCHANGEREASONS;
    }
    public static function BUDGETTYPES(): CostCentersVocabularySummaryName
    {
        if (!isset(self::$BUDGETTYPES)) {
            self::$BUDGETTYPES = new CostCentersVocabularySummaryName('budget-types');
        }
        return self::$BUDGETTYPES;
    }
    public static function PUNCHOUTMODES(): CostCentersVocabularySummaryName
    {
        if (!isset(self::$PUNCHOUTMODES)) {
            self::$PUNCHOUTMODES = new CostCentersVocabularySummaryName('punchout-modes');
        }
        return self::$PUNCHOUTMODES;
    }
    public static function RESTRICTIONTYPES(): CostCentersVocabularySummaryName
    {
        if (!isset(self::$RESTRICTIONTYPES)) {
            self::$RESTRICTIONTYPES = new CostCentersVocabularySummaryName('restriction-types');
        }
        return self::$RESTRICTIONTYPES;
    }
}