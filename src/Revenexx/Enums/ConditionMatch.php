<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConditionMatch implements JsonSerializable
{
    private static ConditionMatch $ALL;
    private static ConditionMatch $ANY;

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

    public static function ALL(): ConditionMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new ConditionMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): ConditionMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new ConditionMatch('any');
        }
        return self::$ANY;
    }
}