<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Lang implements JsonSerializable
{
    private static Lang $DE;
    private static Lang $EN;

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

    public static function DE(): Lang
    {
        if (!isset(self::$DE)) {
            self::$DE = new Lang('de');
        }
        return self::$DE;
    }
    public static function EN(): Lang
    {
        if (!isset(self::$EN)) {
            self::$EN = new Lang('en');
        }
        return self::$EN;
    }
}