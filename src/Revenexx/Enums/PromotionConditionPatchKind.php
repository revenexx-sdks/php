<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionConditionPatchKind implements JsonSerializable
{
    private static PromotionConditionPatchKind $GROUP;
    private static PromotionConditionPatchKind $QUESTION;

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

    public static function GROUP(): PromotionConditionPatchKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new PromotionConditionPatchKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): PromotionConditionPatchKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new PromotionConditionPatchKind('question');
        }
        return self::$QUESTION;
    }
}