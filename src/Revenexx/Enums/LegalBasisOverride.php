<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LegalBasisOverride implements JsonSerializable
{
    private static LegalBasisOverride $CONSENT;
    private static LegalBasisOverride $LEGITIMATEINTEREST;
    private static LegalBasisOverride $NECESSARY;

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

    public static function CONSENT(): LegalBasisOverride
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new LegalBasisOverride('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): LegalBasisOverride
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new LegalBasisOverride('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): LegalBasisOverride
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new LegalBasisOverride('necessary');
        }
        return self::$NECESSARY;
    }
}