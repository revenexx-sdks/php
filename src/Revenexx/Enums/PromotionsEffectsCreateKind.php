<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionsEffectsCreateKind implements JsonSerializable
{
    private static PromotionsEffectsCreateKind $DISCOUNT;
    private static PromotionsEffectsCreateKind $FREEITEM;
    private static PromotionsEffectsCreateKind $SURCHARGE;
    private static PromotionsEffectsCreateKind $NOTICE;
    private static PromotionsEffectsCreateKind $BUNDLE;
    private static PromotionsEffectsCreateKind $CUSTOM;

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

    public static function DISCOUNT(): PromotionsEffectsCreateKind
    {
        if (!isset(self::$DISCOUNT)) {
            self::$DISCOUNT = new PromotionsEffectsCreateKind('discount');
        }
        return self::$DISCOUNT;
    }
    public static function FREEITEM(): PromotionsEffectsCreateKind
    {
        if (!isset(self::$FREEITEM)) {
            self::$FREEITEM = new PromotionsEffectsCreateKind('free_item');
        }
        return self::$FREEITEM;
    }
    public static function SURCHARGE(): PromotionsEffectsCreateKind
    {
        if (!isset(self::$SURCHARGE)) {
            self::$SURCHARGE = new PromotionsEffectsCreateKind('surcharge');
        }
        return self::$SURCHARGE;
    }
    public static function NOTICE(): PromotionsEffectsCreateKind
    {
        if (!isset(self::$NOTICE)) {
            self::$NOTICE = new PromotionsEffectsCreateKind('notice');
        }
        return self::$NOTICE;
    }
    public static function BUNDLE(): PromotionsEffectsCreateKind
    {
        if (!isset(self::$BUNDLE)) {
            self::$BUNDLE = new PromotionsEffectsCreateKind('bundle');
        }
        return self::$BUNDLE;
    }
    public static function CUSTOM(): PromotionsEffectsCreateKind
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new PromotionsEffectsCreateKind('custom');
        }
        return self::$CUSTOM;
    }
}