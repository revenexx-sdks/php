<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressValidationStatus implements JsonSerializable
{
    private static AddressValidationStatus $UNCHECKED;
    private static AddressValidationStatus $VALID;
    private static AddressValidationStatus $CORRECTED;
    private static AddressValidationStatus $SUSPECT;

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

    public static function UNCHECKED(): AddressValidationStatus
    {
        if (!isset(self::$UNCHECKED)) {
            self::$UNCHECKED = new AddressValidationStatus('unchecked');
        }
        return self::$UNCHECKED;
    }
    public static function VALID(): AddressValidationStatus
    {
        if (!isset(self::$VALID)) {
            self::$VALID = new AddressValidationStatus('valid');
        }
        return self::$VALID;
    }
    public static function CORRECTED(): AddressValidationStatus
    {
        if (!isset(self::$CORRECTED)) {
            self::$CORRECTED = new AddressValidationStatus('corrected');
        }
        return self::$CORRECTED;
    }
    public static function SUSPECT(): AddressValidationStatus
    {
        if (!isset(self::$SUSPECT)) {
            self::$SUSPECT = new AddressValidationStatus('suspect');
        }
        return self::$SUSPECT;
    }
}