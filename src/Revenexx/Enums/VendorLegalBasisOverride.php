<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VendorLegalBasisOverride implements JsonSerializable
{
    private static VendorLegalBasisOverride $CONSENT;
    private static VendorLegalBasisOverride $LEGITIMATEINTEREST;
    private static VendorLegalBasisOverride $NECESSARY;

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

    public static function CONSENT(): VendorLegalBasisOverride
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new VendorLegalBasisOverride('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): VendorLegalBasisOverride
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new VendorLegalBasisOverride('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): VendorLegalBasisOverride
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new VendorLegalBasisOverride('necessary');
        }
        return self::$NECESSARY;
    }
}