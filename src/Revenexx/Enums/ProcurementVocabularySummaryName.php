<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProcurementVocabularySummaryName implements JsonSerializable
{
    private static ProcurementVocabularySummaryName $APPROVALSTATUSES;
    private static ProcurementVocabularySummaryName $APPROVERTYPES;
    private static ProcurementVocabularySummaryName $BUDGETRELEASESCOPES;
    private static ProcurementVocabularySummaryName $BUDGETRELEASESTATUSES;
    private static ProcurementVocabularySummaryName $DIRECTORDERSTATUSES;
    private static ProcurementVocabularySummaryName $EVENTNAMES;
    private static ProcurementVocabularySummaryName $ITEMTYPES;
    private static ProcurementVocabularySummaryName $REQUESTSTATUSES;
    private static ProcurementVocabularySummaryName $RULECONDITIONS;
    private static ProcurementVocabularySummaryName $RULEEFFECTS;

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

    public static function APPROVALSTATUSES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$APPROVALSTATUSES)) {
            self::$APPROVALSTATUSES = new ProcurementVocabularySummaryName('approval-statuses');
        }
        return self::$APPROVALSTATUSES;
    }
    public static function APPROVERTYPES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$APPROVERTYPES)) {
            self::$APPROVERTYPES = new ProcurementVocabularySummaryName('approver-types');
        }
        return self::$APPROVERTYPES;
    }
    public static function BUDGETRELEASESCOPES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$BUDGETRELEASESCOPES)) {
            self::$BUDGETRELEASESCOPES = new ProcurementVocabularySummaryName('budget-release-scopes');
        }
        return self::$BUDGETRELEASESCOPES;
    }
    public static function BUDGETRELEASESTATUSES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$BUDGETRELEASESTATUSES)) {
            self::$BUDGETRELEASESTATUSES = new ProcurementVocabularySummaryName('budget-release-statuses');
        }
        return self::$BUDGETRELEASESTATUSES;
    }
    public static function DIRECTORDERSTATUSES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$DIRECTORDERSTATUSES)) {
            self::$DIRECTORDERSTATUSES = new ProcurementVocabularySummaryName('direct-order-statuses');
        }
        return self::$DIRECTORDERSTATUSES;
    }
    public static function EVENTNAMES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$EVENTNAMES)) {
            self::$EVENTNAMES = new ProcurementVocabularySummaryName('event-names');
        }
        return self::$EVENTNAMES;
    }
    public static function ITEMTYPES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new ProcurementVocabularySummaryName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function REQUESTSTATUSES(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$REQUESTSTATUSES)) {
            self::$REQUESTSTATUSES = new ProcurementVocabularySummaryName('request-statuses');
        }
        return self::$REQUESTSTATUSES;
    }
    public static function RULECONDITIONS(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$RULECONDITIONS)) {
            self::$RULECONDITIONS = new ProcurementVocabularySummaryName('rule-conditions');
        }
        return self::$RULECONDITIONS;
    }
    public static function RULEEFFECTS(): ProcurementVocabularySummaryName
    {
        if (!isset(self::$RULEEFFECTS)) {
            self::$RULEEFFECTS = new ProcurementVocabularySummaryName('rule-effects');
        }
        return self::$RULEEFFECTS;
    }
}