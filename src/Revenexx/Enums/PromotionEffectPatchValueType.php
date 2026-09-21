<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectPatchValueType implements JsonSerializable
{
    private static PromotionEffectPatchValueType $PERCENTAGE;
    private static PromotionEffectPatchValueType $AMOUNT;
    private static PromotionEffectPatchValueType $FIXEDPRICE;

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

    public static function PERCENTAGE(): PromotionEffectPatchValueType
    {
        if (!isset(self::$PERCENTAGE)) {
            self::$PERCENTAGE = new PromotionEffectPatchValueType('percentage');
        }
        return self::$PERCENTAGE;
    }
    public static function AMOUNT(): PromotionEffectPatchValueType
    {
        if (!isset(self::$AMOUNT)) {
            self::$AMOUNT = new PromotionEffectPatchValueType('amount');
        }
        return self::$AMOUNT;
    }
    public static function FIXEDPRICE(): PromotionEffectPatchValueType
    {
        if (!isset(self::$FIXEDPRICE)) {
            self::$FIXEDPRICE = new PromotionEffectPatchValueType('fixed_price');
        }
        return self::$FIXEDPRICE;
    }
}