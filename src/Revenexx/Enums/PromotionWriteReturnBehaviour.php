<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionWriteReturnBehaviour implements JsonSerializable
{
    private static PromotionWriteReturnBehaviour $REVERSEPROPORTIONALLY;
    private static PromotionWriteReturnBehaviour $REEVALUATE;

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

    public static function REVERSEPROPORTIONALLY(): PromotionWriteReturnBehaviour
    {
        if (!isset(self::$REVERSEPROPORTIONALLY)) {
            self::$REVERSEPROPORTIONALLY = new PromotionWriteReturnBehaviour('reverse_proportionally');
        }
        return self::$REVERSEPROPORTIONALLY;
    }
    public static function REEVALUATE(): PromotionWriteReturnBehaviour
    {
        if (!isset(self::$REEVALUATE)) {
            self::$REEVALUATE = new PromotionWriteReturnBehaviour('reevaluate');
        }
        return self::$REEVALUATE;
    }
}