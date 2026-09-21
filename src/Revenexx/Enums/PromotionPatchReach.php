<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionPatchReach implements JsonSerializable
{
    private static PromotionPatchReach $AUTOMATIC;
    private static PromotionPatchReach $CODE;

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

    public static function AUTOMATIC(): PromotionPatchReach
    {
        if (!isset(self::$AUTOMATIC)) {
            self::$AUTOMATIC = new PromotionPatchReach('automatic');
        }
        return self::$AUTOMATIC;
    }
    public static function CODE(): PromotionPatchReach
    {
        if (!isset(self::$CODE)) {
            self::$CODE = new PromotionPatchReach('code');
        }
        return self::$CODE;
    }
}