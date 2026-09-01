<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CategoriesRuleMatch implements JsonSerializable
{
    private static CategoriesRuleMatch $ALL;
    private static CategoriesRuleMatch $ANY;

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

    public static function ALL(): CategoriesRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new CategoriesRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): CategoriesRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new CategoriesRuleMatch('any');
        }
        return self::$ANY;
    }
}