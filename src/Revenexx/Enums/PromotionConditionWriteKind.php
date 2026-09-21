<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionConditionWriteKind implements JsonSerializable
{
    private static PromotionConditionWriteKind $GROUP;
    private static PromotionConditionWriteKind $QUESTION;

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

    public static function GROUP(): PromotionConditionWriteKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new PromotionConditionWriteKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): PromotionConditionWriteKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new PromotionConditionWriteKind('question');
        }
        return self::$QUESTION;
    }
}