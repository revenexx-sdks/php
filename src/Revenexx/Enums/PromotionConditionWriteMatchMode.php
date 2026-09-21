<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionConditionWriteMatchMode implements JsonSerializable
{
    private static PromotionConditionWriteMatchMode $ALL;
    private static PromotionConditionWriteMatchMode $ANY;

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

    public static function ALL(): PromotionConditionWriteMatchMode
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionConditionWriteMatchMode('all');
        }
        return self::$ALL;
    }
    public static function ANY(): PromotionConditionWriteMatchMode
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new PromotionConditionWriteMatchMode('any');
        }
        return self::$ANY;
    }
}