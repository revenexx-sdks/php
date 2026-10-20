<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionCopyRequestParts implements JsonSerializable
{
    private static PromotionCopyRequestParts $CONDITIONS;
    private static PromotionCopyRequestParts $EFFECTS;

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

    public static function CONDITIONS(): PromotionCopyRequestParts
    {
        if (!isset(self::$CONDITIONS)) {
            self::$CONDITIONS = new PromotionCopyRequestParts('conditions');
        }
        return self::$CONDITIONS;
    }
    public static function EFFECTS(): PromotionCopyRequestParts
    {
        if (!isset(self::$EFFECTS)) {
            self::$EFFECTS = new PromotionCopyRequestParts('effects');
        }
        return self::$EFFECTS;
    }
}