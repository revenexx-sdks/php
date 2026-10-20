<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConfirmResponseState implements JsonSerializable
{
    private static ConfirmResponseState $CONFIRMED;

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

    public static function CONFIRMED(): ConfirmResponseState
    {
        if (!isset(self::$CONFIRMED)) {
            self::$CONFIRMED = new ConfirmResponseState('confirmed');
        }
        return self::$CONFIRMED;
    }
}