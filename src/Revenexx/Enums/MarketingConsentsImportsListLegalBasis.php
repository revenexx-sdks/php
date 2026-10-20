<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsImportsListLegalBasis implements JsonSerializable
{
    private static MarketingConsentsImportsListLegalBasis $CONSENTSINGLE;
    private static MarketingConsentsImportsListLegalBasis $EXISTINGCUSTOMER;

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

    public static function CONSENTSINGLE(): MarketingConsentsImportsListLegalBasis
    {
        if (!isset(self::$CONSENTSINGLE)) {
            self::$CONSENTSINGLE = new MarketingConsentsImportsListLegalBasis('consent_single');
        }
        return self::$CONSENTSINGLE;
    }
    public static function EXISTINGCUSTOMER(): MarketingConsentsImportsListLegalBasis
    {
        if (!isset(self::$EXISTINGCUSTOMER)) {
            self::$EXISTINGCUSTOMER = new MarketingConsentsImportsListLegalBasis('existing_customer');
        }
        return self::$EXISTINGCUSTOMER;
    }
}