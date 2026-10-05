<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VendorUpdateRequestLegalBasisOverride implements JsonSerializable
{
    private static VendorUpdateRequestLegalBasisOverride $CONSENT;
    private static VendorUpdateRequestLegalBasisOverride $LEGITIMATEINTEREST;
    private static VendorUpdateRequestLegalBasisOverride $NECESSARY;

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

    public static function CONSENT(): VendorUpdateRequestLegalBasisOverride
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new VendorUpdateRequestLegalBasisOverride('consent');
        }
        return self::$CONSENT;
    }
    public static function LEGITIMATEINTEREST(): VendorUpdateRequestLegalBasisOverride
    {
        if (!isset(self::$LEGITIMATEINTEREST)) {
            self::$LEGITIMATEINTEREST = new VendorUpdateRequestLegalBasisOverride('legitimate_interest');
        }
        return self::$LEGITIMATEINTEREST;
    }
    public static function NECESSARY(): VendorUpdateRequestLegalBasisOverride
    {
        if (!isset(self::$NECESSARY)) {
            self::$NECESSARY = new VendorUpdateRequestLegalBasisOverride('necessary');
        }
        return self::$NECESSARY;
    }
}