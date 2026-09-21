<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionsConditionsCreateKind implements JsonSerializable
{
    private static PromotionsConditionsCreateKind $GROUP;
    private static PromotionsConditionsCreateKind $QUESTION;

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

    public static function GROUP(): PromotionsConditionsCreateKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new PromotionsConditionsCreateKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): PromotionsConditionsCreateKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new PromotionsConditionsCreateKind('question');
        }
        return self::$QUESTION;
    }
}