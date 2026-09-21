<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionReturnBehaviour implements JsonSerializable
{
    private static PromotionReturnBehaviour $REVERSEPROPORTIONALLY;
    private static PromotionReturnBehaviour $REEVALUATE;

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

    public static function REVERSEPROPORTIONALLY(): PromotionReturnBehaviour
    {
        if (!isset(self::$REVERSEPROPORTIONALLY)) {
            self::$REVERSEPROPORTIONALLY = new PromotionReturnBehaviour('reverse_proportionally');
        }
        return self::$REVERSEPROPORTIONALLY;
    }
    public static function REEVALUATE(): PromotionReturnBehaviour
    {
        if (!isset(self::$REEVALUATE)) {
            self::$REEVALUATE = new PromotionReturnBehaviour('reevaluate');
        }
        return self::$REEVALUATE;
    }
}