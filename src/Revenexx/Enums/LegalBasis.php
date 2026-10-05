<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LegalBasis implements JsonSerializable
{
    private static LegalBasis $CONSENT;
    private static LegalBasis $LEGITIMATEINTEREST;
    private static LegalBasis $NECESSARY;

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

    public static function CONSENT(): LegalBasis
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new LegalBasis('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): LegalBasis
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new LegalBasis('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): LegalBasis
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new LegalBasis('necessary');
        }
        return self::$NECESSARY;
    }
}