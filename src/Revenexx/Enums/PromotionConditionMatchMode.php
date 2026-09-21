<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionConditionMatchMode implements JsonSerializable
{
    private static PromotionConditionMatchMode $ALL;
    private static PromotionConditionMatchMode $ANY;

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

    public static function ALL(): PromotionConditionMatchMode
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionConditionMatchMode('all');
        }
        return self::$ALL;
    }
    public static function ANY(): PromotionConditionMatchMode
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new PromotionConditionMatchMode('any');
        }
        return self::$ANY;
    }
}