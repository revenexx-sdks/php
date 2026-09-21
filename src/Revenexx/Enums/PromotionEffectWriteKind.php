<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectWriteKind implements JsonSerializable
{
    private static PromotionEffectWriteKind $DISCOUNT;
    private static PromotionEffectWriteKind $FREEITEM;
    private static PromotionEffectWriteKind $SURCHARGE;
    private static PromotionEffectWriteKind $NOTICE;
    private static PromotionEffectWriteKind $BUNDLE;
    private static PromotionEffectWriteKind $CUSTOM;

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

    public static function DISCOUNT(): PromotionEffectWriteKind
    {
        if (!isset(self::$DISCOUNT)) {
            self::$DISCOUNT = new PromotionEffectWriteKind('discount');
        }
        return self::$DISCOUNT;
    }
    public static function FREEITEM(): PromotionEffectWriteKind
    {
        if (!isset(self::$FREEITEM)) {
            self::$FREEITEM = new PromotionEffectWriteKind('free_item');
        }
        return self::$FREEITEM;
    }
    public static function SURCHARGE(): PromotionEffectWriteKind
    {
        if (!isset(self::$SURCHARGE)) {
            self::$SURCHARGE = new PromotionEffectWriteKind('surcharge');
        }
        return self::$SURCHARGE;
    }
    public static function NOTICE(): PromotionEffectWriteKind
    {
        if (!isset(self::$NOTICE)) {
            self::$NOTICE = new PromotionEffectWriteKind('notice');
        }
        return self::$NOTICE;
    }
    public static function BUNDLE(): PromotionEffectWriteKind
    {
        if (!isset(self::$BUNDLE)) {
            self::$BUNDLE = new PromotionEffectWriteKind('bundle');
        }
        return self::$BUNDLE;
    }
    public static function CUSTOM(): PromotionEffectWriteKind
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new PromotionEffectWriteKind('custom');
        }
        return self::$CUSTOM;
    }
}