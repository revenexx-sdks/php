<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentEventLegalBasis implements JsonSerializable
{
    private static ConsentEventLegalBasis $CONSENTDOI;
    private static ConsentEventLegalBasis $CONSENTSINGLE;
    private static ConsentEventLegalBasis $EXISTINGCUSTOMER;
    private static ConsentEventLegalBasis $CONTRACT;

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

    public static function CONSENTDOI(): ConsentEventLegalBasis
    {
        if (!isset(self::$CONSENTDOI)) {
            self::$CONSENTDOI = new ConsentEventLegalBasis('consent_doi');
        }
        return self::$CONSENTDOI;
    }
    public static function CONSENTSINGLE(): ConsentEventLegalBasis
    {
        if (!isset(self::$CONSENTSINGLE)) {
            self::$CONSENTSINGLE = new ConsentEventLegalBasis('consent_single');
        }
        return self::$CONSENTSINGLE;
    }
    public static function EXISTINGCUSTOMER(): ConsentEventLegalBasis
    {
        if (!isset(self::$EXISTINGCUSTOMER)) {
            self::$EXISTINGCUSTOMER = new ConsentEventLegalBasis('existing_customer');
        }
        return self::$EXISTINGCUSTOMER;
    }
    public static function CONTRACT(): ConsentEventLegalBasis
    {
        if (!isset(self::$CONTRACT)) {
            self::$CONTRACT = new ConsentEventLegalBasis('contract');
        }
        return self::$CONTRACT;
    }
}