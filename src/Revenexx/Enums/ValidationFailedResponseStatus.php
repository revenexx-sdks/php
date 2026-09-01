<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ValidationFailedResponseStatus implements JsonSerializable
{
    private static ValidationFailedResponseStatus $INVALID;

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

    public static function INVALID(): ValidationFailedResponseStatus
    {
        if (!isset(self::$INVALID)) {
            self::$INVALID = new ValidationFailedResponseStatus('invalid');
        }
        return self::$INVALID;
    }
}