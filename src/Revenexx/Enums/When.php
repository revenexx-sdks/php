<?php

namespace Revenexx\Enums;

use JsonSerializable;

class When implements JsonSerializable
{
    private static When $NOW;
    private static When $AT;

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

    public static function NOW(): When
    {
        if (!isset(self::$NOW)) {
            self::$NOW = new When('now');
        }
        return self::$NOW;
    }
    public static function AT(): When
    {
        if (!isset(self::$AT)) {
            self::$AT = new When('at');
        }
        return self::$AT;
    }
}