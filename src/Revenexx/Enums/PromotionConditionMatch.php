<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionConditionMatch implements JsonSerializable
{
    private static PromotionConditionMatch $ALL;
    private static PromotionConditionMatch $ANY;

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

    public static function ALL(): PromotionConditionMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionConditionMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): PromotionConditionMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new PromotionConditionMatch('any');
        }
        return self::$ANY;
    }
}