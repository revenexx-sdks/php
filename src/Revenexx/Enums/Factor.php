<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Factor implements JsonSerializable
{
    private static Factor $EMAIL;

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

    public static function EMAIL(): Factor
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new Factor('email');
        }
        return self::$EMAIL;
    }
}