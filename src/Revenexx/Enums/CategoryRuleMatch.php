<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CategoryRuleMatch implements JsonSerializable
{
    private static CategoryRuleMatch $ALL;
    private static CategoryRuleMatch $ANY;

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

    public static function ALL(): CategoryRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new CategoryRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): CategoryRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new CategoryRuleMatch('any');
        }
        return self::$ANY;
    }
}