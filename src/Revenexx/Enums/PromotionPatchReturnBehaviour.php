<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionPatchReturnBehaviour implements JsonSerializable
{
    private static PromotionPatchReturnBehaviour $REVERSEPROPORTIONALLY;
    private static PromotionPatchReturnBehaviour $REEVALUATE;

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

    public static function REVERSEPROPORTIONALLY(): PromotionPatchReturnBehaviour
    {
        if (!isset(self::$REVERSEPROPORTIONALLY)) {
            self::$REVERSEPROPORTIONALLY = new PromotionPatchReturnBehaviour('reverse_proportionally');
        }
        return self::$REVERSEPROPORTIONALLY;
    }
    public static function REEVALUATE(): PromotionPatchReturnBehaviour
    {
        if (!isset(self::$REEVALUATE)) {
            self::$REEVALUATE = new PromotionPatchReturnBehaviour('reevaluate');
        }
        return self::$REEVALUATE;
    }
}