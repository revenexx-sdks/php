<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderDiscountEffectKind implements JsonSerializable
{
    private static OrderDiscountEffectKind $DISCOUNT;
    private static OrderDiscountEffectKind $FREEITEM;
    private static OrderDiscountEffectKind $SURCHARGE;
    private static OrderDiscountEffectKind $BUNDLE;
    private static OrderDiscountEffectKind $CUSTOM;

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

    public static function DISCOUNT(): OrderDiscountEffectKind
    {
        if (!isset(self::$DISCOUNT)) {
            self::$DISCOUNT = new OrderDiscountEffectKind('discount');
        }
        return self::$DISCOUNT;
    }
    public static function FREEITEM(): OrderDiscountEffectKind
    {
        if (!isset(self::$FREEITEM)) {
            self::$FREEITEM = new OrderDiscountEffectKind('free_item');
        }
        return self::$FREEITEM;
    }
    public static function SURCHARGE(): OrderDiscountEffectKind
    {
        if (!isset(self::$SURCHARGE)) {
            self::$SURCHARGE = new OrderDiscountEffectKind('surcharge');
        }
        return self::$SURCHARGE;
    }
    public static function BUNDLE(): OrderDiscountEffectKind
    {
        if (!isset(self::$BUNDLE)) {
            self::$BUNDLE = new OrderDiscountEffectKind('bundle');
        }
        return self::$BUNDLE;
    }
    public static function CUSTOM(): OrderDiscountEffectKind
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new OrderDiscountEffectKind('custom');
        }
        return self::$CUSTOM;
    }
}