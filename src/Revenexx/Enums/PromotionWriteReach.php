<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionWriteReach implements JsonSerializable
{
    private static PromotionWriteReach $AUTOMATIC;
    private static PromotionWriteReach $CODE;

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

    public static function AUTOMATIC(): PromotionWriteReach
    {
        if (!isset(self::$AUTOMATIC)) {
            self::$AUTOMATIC = new PromotionWriteReach('automatic');
        }
        return self::$AUTOMATIC;
    }
    public static function CODE(): PromotionWriteReach
    {
        if (!isset(self::$CODE)) {
            self::$CODE = new PromotionWriteReach('code');
        }
        return self::$CODE;
    }
}