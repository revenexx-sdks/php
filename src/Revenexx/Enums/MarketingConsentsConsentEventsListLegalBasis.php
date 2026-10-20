<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsConsentEventsListLegalBasis implements JsonSerializable
{
    private static MarketingConsentsConsentEventsListLegalBasis $CONSENTDOI;
    private static MarketingConsentsConsentEventsListLegalBasis $CONSENTSINGLE;
    private static MarketingConsentsConsentEventsListLegalBasis $EXISTINGCUSTOMER;
    private static MarketingConsentsConsentEventsListLegalBasis $CONTRACT;

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

    public static function CONSENTDOI(): MarketingConsentsConsentEventsListLegalBasis
    {
        if (!isset(self::$CONSENTDOI)) {
            self::$CONSENTDOI = new MarketingConsentsConsentEventsListLegalBasis('consent_doi');
        }
        return self::$CONSENTDOI;
    }
    public static function CONSENTSINGLE(): MarketingConsentsConsentEventsListLegalBasis
    {
        if (!isset(self::$CONSENTSINGLE)) {
            self::$CONSENTSINGLE = new MarketingConsentsConsentEventsListLegalBasis('consent_single');
        }
        return self::$CONSENTSINGLE;
    }
    public static function EXISTINGCUSTOMER(): MarketingConsentsConsentEventsListLegalBasis
    {
        if (!isset(self::$EXISTINGCUSTOMER)) {
            self::$EXISTINGCUSTOMER = new MarketingConsentsConsentEventsListLegalBasis('existing_customer');
        }
        return self::$EXISTINGCUSTOMER;
    }
    public static function CONTRACT(): MarketingConsentsConsentEventsListLegalBasis
    {
        if (!isset(self::$CONTRACT)) {
            self::$CONTRACT = new MarketingConsentsConsentEventsListLegalBasis('contract');
        }
        return self::$CONTRACT;
    }
}