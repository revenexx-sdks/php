<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectPatchKind implements JsonSerializable
{
    private static PromotionEffectPatchKind $DISCOUNT;
    private static PromotionEffectPatchKind $FREEITEM;
    private static PromotionEffectPatchKind $SURCHARGE;
    private static PromotionEffectPatchKind $NOTICE;
    private static PromotionEffectPatchKind $BUNDLE;
    private static PromotionEffectPatchKind $CUSTOM;

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

    public static function DISCOUNT(): PromotionEffectPatchKind
    {
        if (!isset(self::$DISCOUNT)) {
            self::$DISCOUNT = new PromotionEffectPatchKind('discount');
        }
        return self::$DISCOUNT;
    }
    public static function FREEITEM(): PromotionEffectPatchKind
    {
        if (!isset(self::$FREEITEM)) {
            self::$FREEITEM = new PromotionEffectPatchKind('free_item');
        }
        return self::$FREEITEM;
    }
    public static function SURCHARGE(): PromotionEffectPatchKind
    {
        if (!isset(self::$SURCHARGE)) {
            self::$SURCHARGE = new PromotionEffectPatchKind('surcharge');
        }
        return self::$SURCHARGE;
    }
    public static function NOTICE(): PromotionEffectPatchKind
    {
        if (!isset(self::$NOTICE)) {
            self::$NOTICE = new PromotionEffectPatchKind('notice');
        }
        return self::$NOTICE;
    }
    public static function BUNDLE(): PromotionEffectPatchKind
    {
        if (!isset(self::$BUNDLE)) {
            self::$BUNDLE = new PromotionEffectPatchKind('bundle');
        }
        return self::$BUNDLE;
    }
    public static function CUSTOM(): PromotionEffectPatchKind
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new PromotionEffectPatchKind('custom');
        }
        return self::$CUSTOM;
    }
}