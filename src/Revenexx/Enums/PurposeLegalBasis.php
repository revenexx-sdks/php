<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurposeLegalBasis implements JsonSerializable
{
    private static PurposeLegalBasis $CONSENT;
    private static PurposeLegalBasis $LEGITIMATEINTEREST;
    private static PurposeLegalBasis $NECESSARY;

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

    public static function CONSENT(): PurposeLegalBasis
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new PurposeLegalBasis('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): PurposeLegalBasis
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new PurposeLegalBasis('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): PurposeLegalBasis
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new PurposeLegalBasis('necessary');
        }
        return self::$NECESSARY;
    }
}