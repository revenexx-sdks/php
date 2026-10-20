<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionLegalBasis implements JsonSerializable
{
    private static SubscriptionLegalBasis $CONSENTDOI;
    private static SubscriptionLegalBasis $CONSENTSINGLE;
    private static SubscriptionLegalBasis $EXISTINGCUSTOMER;
    private static SubscriptionLegalBasis $CONTRACT;

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

    public static function CONSENTDOI(): SubscriptionLegalBasis
    {
        if (!isset(self::$CONSENTDOI)) {
            self::$CONSENTDOI = new SubscriptionLegalBasis('consent_doi');
        }
        return self::$CONSENTDOI;
    }
    public static function CONSENTSINGLE(): SubscriptionLegalBasis
    {
        if (!isset(self::$CONSENTSINGLE)) {
            self::$CONSENTSINGLE = new SubscriptionLegalBasis('consent_single');
        }
        return self::$CONSENTSINGLE;
    }
    public static function EXISTINGCUSTOMER(): SubscriptionLegalBasis
    {
        if (!isset(self::$EXISTINGCUSTOMER)) {
            self::$EXISTINGCUSTOMER = new SubscriptionLegalBasis('existing_customer');
        }
        return self::$EXISTINGCUSTOMER;
    }
    public static function CONTRACT(): SubscriptionLegalBasis
    {
        if (!isset(self::$CONTRACT)) {
            self::$CONTRACT = new SubscriptionLegalBasis('contract');
        }
        return self::$CONTRACT;
    }
}