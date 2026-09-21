<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionWriteConditionMatch implements JsonSerializable
{
    private static PromotionWriteConditionMatch $ALL;
    private static PromotionWriteConditionMatch $ANY;

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

    public static function ALL(): PromotionWriteConditionMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionWriteConditionMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): PromotionWriteConditionMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new PromotionWriteConditionMatch('any');
        }
        return self::$ANY;
    }
}