<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ValidationStatus implements JsonSerializable
{
    private static ValidationStatus $UNCHECKED;
    private static ValidationStatus $VALID;
    private static ValidationStatus $CORRECTED;
    private static ValidationStatus $SUSPECT;

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

    public static function UNCHECKED(): ValidationStatus
    {
        if (!isset(self::$UNCHECKED)) {
            self::$UNCHECKED = new ValidationStatus('unchecked');
        }
        return self::$UNCHECKED;
    }
    public static function VALID(): ValidationStatus
    {
        if (!isset(self::$VALID)) {
            self::$VALID = new ValidationStatus('valid');
        }
        return self::$VALID;
    }
    public static function CORRECTED(): ValidationStatus
    {
        if (!isset(self::$CORRECTED)) {
            self::$CORRECTED = new ValidationStatus('corrected');
        }
        return self::$CORRECTED;
    }
    public static function SUSPECT(): ValidationStatus
    {
        if (!isset(self::$SUSPECT)) {
            self::$SUSPECT = new ValidationStatus('suspect');
        }
        return self::$SUSPECT;
    }
}