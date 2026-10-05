<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Deleted implements JsonSerializable
{
    private static Deleted $ONLY;

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

    public static function ONLY(): Deleted
    {
        if (!isset(self::$ONLY)) {
            self::$ONLY = new Deleted('only');
        }
        return self::$ONLY;
    }
}