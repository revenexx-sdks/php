<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactRestoreResultStatus implements JsonSerializable
{
    private static ContactRestoreResultStatus $RESTORED;

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

    public static function RESTORED(): ContactRestoreResultStatus
    {
        if (!isset(self::$RESTORED)) {
            self::$RESTORED = new ContactRestoreResultStatus('restored');
        }
        return self::$RESTORED;
    }
}