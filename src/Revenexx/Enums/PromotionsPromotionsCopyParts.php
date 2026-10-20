<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionsPromotionsCopyParts implements JsonSerializable
{
    private static PromotionsPromotionsCopyParts $CONDITIONS;
    private static PromotionsPromotionsCopyParts $EFFECTS;

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

    public static function CONDITIONS(): PromotionsPromotionsCopyParts
    {
        if (!isset(self::$CONDITIONS)) {
            self::$CONDITIONS = new PromotionsPromotionsCopyParts('conditions');
        }
        return self::$CONDITIONS;
    }
    public static function EFFECTS(): PromotionsPromotionsCopyParts
    {
        if (!isset(self::$EFFECTS)) {
            self::$EFFECTS = new PromotionsPromotionsCopyParts('effects');
        }
        return self::$EFFECTS;
    }
}