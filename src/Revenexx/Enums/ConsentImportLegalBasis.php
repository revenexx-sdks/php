<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentImportLegalBasis implements JsonSerializable
{
    private static ConsentImportLegalBasis $CONSENTSINGLE;
    private static ConsentImportLegalBasis $EXISTINGCUSTOMER;

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

    public static function CONSENTSINGLE(): ConsentImportLegalBasis
    {
        if (!isset(self::$CONSENTSINGLE)) {
            self::$CONSENTSINGLE = new ConsentImportLegalBasis('consent_single');
        }
        return self::$CONSENTSINGLE;
    }
    public static function EXISTINGCUSTOMER(): ConsentImportLegalBasis
    {
        if (!isset(self::$EXISTINGCUSTOMER)) {
            self::$EXISTINGCUSTOMER = new ConsentImportLegalBasis('existing_customer');
        }
        return self::$EXISTINGCUSTOMER;
    }
}