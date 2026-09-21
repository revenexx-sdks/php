<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionReach implements JsonSerializable
{
    private static PromotionReach $AUTOMATIC;
    private static PromotionReach $CODE;

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

    public static function AUTOMATIC(): PromotionReach
    {
        if (!isset(self::$AUTOMATIC)) {
            self::$AUTOMATIC = new PromotionReach('automatic');
        }
        return self::$AUTOMATIC;
    }
    public static function CODE(): PromotionReach
    {
        if (!isset(self::$CODE)) {
            self::$CODE = new PromotionReach('code');
        }
        return self::$CODE;
    }
}