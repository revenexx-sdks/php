<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProcurementVocabularyName implements JsonSerializable
{
    private static ProcurementVocabularyName $APPROVALSTATUSES;
    private static ProcurementVocabularyName $APPROVERTYPES;
    private static ProcurementVocabularyName $BUDGETRELEASESCOPES;
    private static ProcurementVocabularyName $BUDGETRELEASESTATUSES;
    private static ProcurementVocabularyName $DIRECTORDERSTATUSES;
    private static ProcurementVocabularyName $EVENTNAMES;
    private static ProcurementVocabularyName $ITEMTYPES;
    private static ProcurementVocabularyName $REQUESTSTATUSES;
    private static ProcurementVocabularyName $RULECONDITIONS;
    private static ProcurementVocabularyName $RULEEFFECTS;

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

    public static function APPROVALSTATUSES(): ProcurementVocabularyName
    {
        if (!isset(self::$APPROVALSTATUSES)) {
            self::$APPROVALSTATUSES = new ProcurementVocabularyName('approval-statuses');
        }
        return self::$APPROVALSTATUSES;
    }
    public static function APPROVERTYPES(): ProcurementVocabularyName
    {
        if (!isset(self::$APPROVERTYPES)) {
            self::$APPROVERTYPES = new ProcurementVocabularyName('approver-types');
        }
        return self::$APPROVERTYPES;
    }
    public static function BUDGETRELEASESCOPES(): ProcurementVocabularyName
    {
        if (!isset(self::$BUDGETRELEASESCOPES)) {
            self::$BUDGETRELEASESCOPES = new ProcurementVocabularyName('budget-release-scopes');
        }
        return self::$BUDGETRELEASESCOPES;
    }
    public static function BUDGETRELEASESTATUSES(): ProcurementVocabularyName
    {
        if (!isset(self::$BUDGETRELEASESTATUSES)) {
            self::$BUDGETRELEASESTATUSES = new ProcurementVocabularyName('budget-release-statuses');
        }
        return self::$BUDGETRELEASESTATUSES;
    }
    public static function DIRECTORDERSTATUSES(): ProcurementVocabularyName
    {
        if (!isset(self::$DIRECTORDERSTATUSES)) {
            self::$DIRECTORDERSTATUSES = new ProcurementVocabularyName('direct-order-statuses');
        }
        return self::$DIRECTORDERSTATUSES;
    }
    public static function EVENTNAMES(): ProcurementVocabularyName
    {
        if (!isset(self::$EVENTNAMES)) {
            self::$EVENTNAMES = new ProcurementVocabularyName('event-names');
        }
        return self::$EVENTNAMES;
    }
    public static function ITEMTYPES(): ProcurementVocabularyName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new ProcurementVocabularyName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function REQUESTSTATUSES(): ProcurementVocabularyName
    {
        if (!isset(self::$REQUESTSTATUSES)) {
            self::$REQUESTSTATUSES = new ProcurementVocabularyName('request-statuses');
        }
        return self::$REQUESTSTATUSES;
    }
    public static function RULECONDITIONS(): ProcurementVocabularyName
    {
        if (!isset(self::$RULECONDITIONS)) {
            self::$RULECONDITIONS = new ProcurementVocabularyName('rule-conditions');
        }
        return self::$RULECONDITIONS;
    }
    public static function RULEEFFECTS(): ProcurementVocabularyName
    {
        if (!isset(self::$RULEEFFECTS)) {
            self::$RULEEFFECTS = new ProcurementVocabularyName('rule-effects');
        }
        return self::$RULEEFFECTS;
    }
}