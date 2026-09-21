<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectValueType implements JsonSerializable
{
    private static PromotionEffectValueType $PERCENTAGE;
    private static PromotionEffectValueType $AMOUNT;
    private static PromotionEffectValueType $FIXEDPRICE;

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

    public static function PERCENTAGE(): PromotionEffectValueType
    {
        if (!isset(self::$PERCENTAGE)) {
            self::$PERCENTAGE = new PromotionEffectValueType('percentage');
        }
        return self::$PERCENTAGE;
    }
    public static function AMOUNT(): PromotionEffectValueType
    {
        if (!isset(self::$AMOUNT)) {
            self::$AMOUNT = new PromotionEffectValueType('amount');
        }
        return self::$AMOUNT;
    }
    public static function FIXEDPRICE(): PromotionEffectValueType
    {
        if (!isset(self::$FIXEDPRICE)) {
            self::$FIXEDPRICE = new PromotionEffectValueType('fixed_price');
        }
        return self::$FIXEDPRICE;
    }
}