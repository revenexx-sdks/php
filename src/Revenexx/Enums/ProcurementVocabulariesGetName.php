<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProcurementVocabulariesGetName implements JsonSerializable
{
    private static ProcurementVocabulariesGetName $APPROVALSTATUSES;
    private static ProcurementVocabulariesGetName $APPROVERTYPES;
    private static ProcurementVocabulariesGetName $BUDGETRELEASESCOPES;
    private static ProcurementVocabulariesGetName $BUDGETRELEASESTATUSES;
    private static ProcurementVocabulariesGetName $DIRECTORDERSTATUSES;
    private static ProcurementVocabulariesGetName $EVENTNAMES;
    private static ProcurementVocabulariesGetName $ITEMTYPES;
    private static ProcurementVocabulariesGetName $REQUESTSTATUSES;
    private static ProcurementVocabulariesGetName $RULECONDITIONS;
    private static ProcurementVocabulariesGetName $RULEEFFECTS;

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

    public static function APPROVALSTATUSES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$APPROVALSTATUSES)) {
            self::$APPROVALSTATUSES = new ProcurementVocabulariesGetName('approval-statuses');
        }
        return self::$APPROVALSTATUSES;
    }
    public static function APPROVERTYPES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$APPROVERTYPES)) {
            self::$APPROVERTYPES = new ProcurementVocabulariesGetName('approver-types');
        }
        return self::$APPROVERTYPES;
    }
    public static function BUDGETRELEASESCOPES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$BUDGETRELEASESCOPES)) {
            self::$BUDGETRELEASESCOPES = new ProcurementVocabulariesGetName('budget-release-scopes');
        }
        return self::$BUDGETRELEASESCOPES;
    }
    public static function BUDGETRELEASESTATUSES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$BUDGETRELEASESTATUSES)) {
            self::$BUDGETRELEASESTATUSES = new ProcurementVocabulariesGetName('budget-release-statuses');
        }
        return self::$BUDGETRELEASESTATUSES;
    }
    public static function DIRECTORDERSTATUSES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$DIRECTORDERSTATUSES)) {
            self::$DIRECTORDERSTATUSES = new ProcurementVocabulariesGetName('direct-order-statuses');
        }
        return self::$DIRECTORDERSTATUSES;
    }
    public static function EVENTNAMES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$EVENTNAMES)) {
            self::$EVENTNAMES = new ProcurementVocabulariesGetName('event-names');
        }
        return self::$EVENTNAMES;
    }
    public static function ITEMTYPES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new ProcurementVocabulariesGetName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function REQUESTSTATUSES(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$REQUESTSTATUSES)) {
            self::$REQUESTSTATUSES = new ProcurementVocabulariesGetName('request-statuses');
        }
        return self::$REQUESTSTATUSES;
    }
    public static function RULECONDITIONS(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$RULECONDITIONS)) {
            self::$RULECONDITIONS = new ProcurementVocabulariesGetName('rule-conditions');
        }
        return self::$RULECONDITIONS;
    }
    public static function RULEEFFECTS(): ProcurementVocabulariesGetName
    {
        if (!isset(self::$RULEEFFECTS)) {
            self::$RULEEFFECTS = new ProcurementVocabulariesGetName('rule-effects');
        }
        return self::$RULEEFFECTS;
    }
}