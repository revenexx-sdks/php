<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionConditionPatchMatchMode implements JsonSerializable
{
    private static PromotionConditionPatchMatchMode $ALL;
    private static PromotionConditionPatchMatchMode $ANY;

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

    public static function ALL(): PromotionConditionPatchMatchMode
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionConditionPatchMatchMode('all');
        }
        return self::$ALL;
    }
    public static function ANY(): PromotionConditionPatchMatchMode
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new PromotionConditionPatchMatchMode('any');
        }
        return self::$ANY;
    }
}