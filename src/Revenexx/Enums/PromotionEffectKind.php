<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectKind implements JsonSerializable
{
    private static PromotionEffectKind $DISCOUNT;
    private static PromotionEffectKind $FREEITEM;
    private static PromotionEffectKind $SURCHARGE;
    private static PromotionEffectKind $NOTICE;
    private static PromotionEffectKind $BUNDLE;
    private static PromotionEffectKind $CUSTOM;

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

    public static function DISCOUNT(): PromotionEffectKind
    {
        if (!isset(self::$DISCOUNT)) {
            self::$DISCOUNT = new PromotionEffectKind('discount');
        }
        return self::$DISCOUNT;
    }
    public static function FREEITEM(): PromotionEffectKind
    {
        if (!isset(self::$FREEITEM)) {
            self::$FREEITEM = new PromotionEffectKind('free_item');
        }
        return self::$FREEITEM;
    }
    public static function SURCHARGE(): PromotionEffectKind
    {
        if (!isset(self::$SURCHARGE)) {
            self::$SURCHARGE = new PromotionEffectKind('surcharge');
        }
        return self::$SURCHARGE;
    }
    public static function NOTICE(): PromotionEffectKind
    {
        if (!isset(self::$NOTICE)) {
            self::$NOTICE = new PromotionEffectKind('notice');
        }
        return self::$NOTICE;
    }
    public static function BUNDLE(): PromotionEffectKind
    {
        if (!isset(self::$BUNDLE)) {
            self::$BUNDLE = new PromotionEffectKind('bundle');
        }
        return self::$BUNDLE;
    }
    public static function CUSTOM(): PromotionEffectKind
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new PromotionEffectKind('custom');
        }
        return self::$CUSTOM;
    }
}