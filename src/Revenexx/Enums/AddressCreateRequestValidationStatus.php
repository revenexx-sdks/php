<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressCreateRequestValidationStatus implements JsonSerializable
{
    private static AddressCreateRequestValidationStatus $UNCHECKED;
    private static AddressCreateRequestValidationStatus $VALID;
    private static AddressCreateRequestValidationStatus $CORRECTED;
    private static AddressCreateRequestValidationStatus $SUSPECT;

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

    public static function UNCHECKED(): AddressCreateRequestValidationStatus
    {
        if (!isset(self::$UNCHECKED)) {
            self::$UNCHECKED = new AddressCreateRequestValidationStatus('unchecked');
        }
        return self::$UNCHECKED;
    }
    public static function VALID(): AddressCreateRequestValidationStatus
    {
        if (!isset(self::$VALID)) {
            self::$VALID = new AddressCreateRequestValidationStatus('valid');
        }
        return self::$VALID;
    }
    public static function CORRECTED(): AddressCreateRequestValidationStatus
    {
        if (!isset(self::$CORRECTED)) {
            self::$CORRECTED = new AddressCreateRequestValidationStatus('corrected');
        }
        return self::$CORRECTED;
    }
    public static function SUSPECT(): AddressCreateRequestValidationStatus
    {
        if (!isset(self::$SUSPECT)) {
            self::$SUSPECT = new AddressCreateRequestValidationStatus('suspect');
        }
        return self::$SUSPECT;
    }
}