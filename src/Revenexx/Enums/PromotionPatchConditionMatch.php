<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionPatchConditionMatch implements JsonSerializable
{
    private static PromotionPatchConditionMatch $ALL;
    private static PromotionPatchConditionMatch $ANY;

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

    public static function ALL(): PromotionPatchConditionMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionPatchConditionMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): PromotionPatchConditionMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new PromotionPatchConditionMatch('any');
        }
        return self::$ANY;
    }
}