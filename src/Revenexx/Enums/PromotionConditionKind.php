<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionConditionKind implements JsonSerializable
{
    private static PromotionConditionKind $GROUP;
    private static PromotionConditionKind $QUESTION;

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

    public static function GROUP(): PromotionConditionKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new PromotionConditionKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): PromotionConditionKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new PromotionConditionKind('question');
        }
        return self::$QUESTION;
    }
}