<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RuleMatch implements JsonSerializable
{
    private static RuleMatch $ALL;
    private static RuleMatch $ANY;

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

    public static function ALL(): RuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new RuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): RuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new RuleMatch('any');
        }
        return self::$ANY;
    }
}