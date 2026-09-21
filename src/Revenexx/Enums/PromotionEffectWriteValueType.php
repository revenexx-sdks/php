<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectWriteValueType implements JsonSerializable
{
    private static PromotionEffectWriteValueType $PERCENTAGE;
    private static PromotionEffectWriteValueType $AMOUNT;
    private static PromotionEffectWriteValueType $FIXEDPRICE;

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

    public static function PERCENTAGE(): PromotionEffectWriteValueType
    {
        if (!isset(self::$PERCENTAGE)) {
            self::$PERCENTAGE = new PromotionEffectWriteValueType('percentage');
        }
        return self::$PERCENTAGE;
    }
    public static function AMOUNT(): PromotionEffectWriteValueType
    {
        if (!isset(self::$AMOUNT)) {
            self::$AMOUNT = new PromotionEffectWriteValueType('amount');
        }
        return self::$AMOUNT;
    }
    public static function FIXEDPRICE(): PromotionEffectWriteValueType
    {
        if (!isset(self::$FIXEDPRICE)) {
            self::$FIXEDPRICE = new PromotionEffectWriteValueType('fixed_price');
        }
        return self::$FIXEDPRICE;
    }
}