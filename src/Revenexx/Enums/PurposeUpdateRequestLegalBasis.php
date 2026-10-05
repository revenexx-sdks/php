<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurposeUpdateRequestLegalBasis implements JsonSerializable
{
    private static PurposeUpdateRequestLegalBasis $CONSENT;
    private static PurposeUpdateRequestLegalBasis $LEGITIMATEINTEREST;
    private static PurposeUpdateRequestLegalBasis $NECESSARY;

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

    public static function CONSENT(): PurposeUpdateRequestLegalBasis
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new PurposeUpdateRequestLegalBasis('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): PurposeUpdateRequestLegalBasis
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new PurposeUpdateRequestLegalBasis('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): PurposeUpdateRequestLegalBasis
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new PurposeUpdateRequestLegalBasis('necessary');
        }
        return self::$NECESSARY;
    }
}