<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentsVocabulariesGetName implements JsonSerializable
{
    private static PaymentsVocabulariesGetName $DUNNINGSTAGES;
    private static PaymentsVocabulariesGetName $FEETYPES;
    private static PaymentsVocabulariesGetName $METHODKINDS;
    private static PaymentsVocabulariesGetName $STATUSES;

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

    public static function DUNNINGSTAGES(): PaymentsVocabulariesGetName
    {
        if (!isset(self::$DUNNINGSTAGES)) {
            self::$DUNNINGSTAGES = new PaymentsVocabulariesGetName('dunning-stages');
        }
        return self::$DUNNINGSTAGES;
    }
    public static function FEETYPES(): PaymentsVocabulariesGetName
    {
        if (!isset(self::$FEETYPES)) {
            self::$FEETYPES = new PaymentsVocabulariesGetName('fee-types');
        }
        return self::$FEETYPES;
    }
    public static function METHODKINDS(): PaymentsVocabulariesGetName
    {
        if (!isset(self::$METHODKINDS)) {
            self::$METHODKINDS = new PaymentsVocabulariesGetName('method-kinds');
        }
        return self::$METHODKINDS;
    }
    public static function STATUSES(): PaymentsVocabulariesGetName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new PaymentsVocabulariesGetName('statuses');
        }
        return self::$STATUSES;
    }
}