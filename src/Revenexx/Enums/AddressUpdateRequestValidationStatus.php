<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressUpdateRequestValidationStatus implements JsonSerializable
{
    private static AddressUpdateRequestValidationStatus $UNCHECKED;
    private static AddressUpdateRequestValidationStatus $VALID;
    private static AddressUpdateRequestValidationStatus $CORRECTED;
    private static AddressUpdateRequestValidationStatus $SUSPECT;

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

    public static function UNCHECKED(): AddressUpdateRequestValidationStatus
    {
        if (!isset(self::$UNCHECKED)) {
            self::$UNCHECKED = new AddressUpdateRequestValidationStatus('unchecked');
        }
        return self::$UNCHECKED;
    }
    public static function VALID(): AddressUpdateRequestValidationStatus
    {
        if (!isset(self::$VALID)) {
            self::$VALID = new AddressUpdateRequestValidationStatus('valid');
        }
        return self::$VALID;
    }
    public static function CORRECTED(): AddressUpdateRequestValidationStatus
    {
        if (!isset(self::$CORRECTED)) {
            self::$CORRECTED = new AddressUpdateRequestValidationStatus('corrected');
        }
        return self::$CORRECTED;
    }
    public static function SUSPECT(): AddressUpdateRequestValidationStatus
    {
        if (!isset(self::$SUSPECT)) {
            self::$SUSPECT = new AddressUpdateRequestValidationStatus('suspect');
        }
        return self::$SUSPECT;
    }
}