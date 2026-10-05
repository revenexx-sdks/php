<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCentersVocabularyName implements JsonSerializable
{
    private static CostCentersVocabularyName $BUDGETCHANGEREASONS;
    private static CostCentersVocabularyName $BUDGETTYPES;
    private static CostCentersVocabularyName $PUNCHOUTMODES;
    private static CostCentersVocabularyName $RESTRICTIONTYPES;

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

    public static function BUDGETCHANGEREASONS(): CostCentersVocabularyName
    {
        if (!isset(self::$BUDGETCHANGEREASONS)) {
            self::$BUDGETCHANGEREASONS = new CostCentersVocabularyName('budget-change-reasons');
        }
        return self::$BUDGETCHANGEREASONS;
    }
    public static function BUDGETTYPES(): CostCentersVocabularyName
    {
        if (!isset(self::$BUDGETTYPES)) {
            self::$BUDGETTYPES = new CostCentersVocabularyName('budget-types');
        }
        return self::$BUDGETTYPES;
    }
    public static function PUNCHOUTMODES(): CostCentersVocabularyName
    {
        if (!isset(self::$PUNCHOUTMODES)) {
            self::$PUNCHOUTMODES = new CostCentersVocabularyName('punchout-modes');
        }
        return self::$PUNCHOUTMODES;
    }
    public static function RESTRICTIONTYPES(): CostCentersVocabularyName
    {
        if (!isset(self::$RESTRICTIONTYPES)) {
            self::$RESTRICTIONTYPES = new CostCentersVocabularyName('restriction-types');
        }
        return self::$RESTRICTIONTYPES;
    }
}