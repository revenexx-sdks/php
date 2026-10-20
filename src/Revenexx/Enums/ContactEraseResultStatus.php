<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactEraseResultStatus implements JsonSerializable
{
    private static ContactEraseResultStatus $ERASED;

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

    public static function ERASED(): ContactEraseResultStatus
    {
        if (!isset(self::$ERASED)) {
            self::$ERASED = new ContactEraseResultStatus('erased');
        }
        return self::$ERASED;
    }
}