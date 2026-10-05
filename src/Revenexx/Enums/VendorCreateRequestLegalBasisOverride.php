<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VendorCreateRequestLegalBasisOverride implements JsonSerializable
{
    private static VendorCreateRequestLegalBasisOverride $CONSENT;
    private static VendorCreateRequestLegalBasisOverride $LEGITIMATEINTEREST;
    private static VendorCreateRequestLegalBasisOverride $NECESSARY;

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

    public static function CONSENT(): VendorCreateRequestLegalBasisOverride
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new VendorCreateRequestLegalBasisOverride('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): VendorCreateRequestLegalBasisOverride
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new VendorCreateRequestLegalBasisOverride('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): VendorCreateRequestLegalBasisOverride
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new VendorCreateRequestLegalBasisOverride('necessary');
        }
        return self::$NECESSARY;
    }
}