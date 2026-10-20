<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentImportRequestLegalBasis implements JsonSerializable
{
    private static ConsentImportRequestLegalBasis $CONSENTSINGLE;
    private static ConsentImportRequestLegalBasis $EXISTINGCUSTOMER;

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

    public static function CONSENTSINGLE(): ConsentImportRequestLegalBasis
    {
        if (!isset(self::$CONSENTSINGLE)) {
            self::$CONSENTSINGLE = new ConsentImportRequestLegalBasis('consent_single');
        }
        return self::$CONSENTSINGLE;
    }
    public static function EXISTINGCUSTOMER(): ConsentImportRequestLegalBasis
    {
        if (!isset(self::$EXISTINGCUSTOMER)) {
            self::$EXISTINGCUSTOMER = new ConsentImportRequestLegalBasis('existing_customer');
        }
        return self::$EXISTINGCUSTOMER;
    }
}