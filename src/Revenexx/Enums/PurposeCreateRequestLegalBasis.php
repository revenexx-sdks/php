<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurposeCreateRequestLegalBasis implements JsonSerializable
{
    private static PurposeCreateRequestLegalBasis $CONSENT;
    private static PurposeCreateRequestLegalBasis $LEGITIMATEINTEREST;
    private static PurposeCreateRequestLegalBasis $NECESSARY;

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

    public static function CONSENT(): PurposeCreateRequestLegalBasis
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new PurposeCreateRequestLegalBasis('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): PurposeCreateRequestLegalBasis
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new PurposeCreateRequestLegalBasis('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): PurposeCreateRequestLegalBasis
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new PurposeCreateRequestLegalBasis('necessary');
        }
        return self::$NECESSARY;
    }
}