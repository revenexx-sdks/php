<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectPatchTargetScope implements JsonSerializable
{
    private static PromotionEffectPatchTargetScope $UNITPRICE;
    private static PromotionEffectPatchTargetScope $LINETOTAL;
    private static PromotionEffectPatchTargetScope $CARTSUBTOTAL;
    private static PromotionEffectPatchTargetScope $GRANDTOTAL;
    private static PromotionEffectPatchTargetScope $SHIPPING;
    private static PromotionEffectPatchTargetScope $PAYMENTFEE;

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

    public static function UNITPRICE(): PromotionEffectPatchTargetScope
    {
        if (!isset(self::$UNITPRICE)) {
            self::$UNITPRICE = new PromotionEffectPatchTargetScope('unit_price');
        }
        return self::$UNITPRICE;
    }
    public static function LINETOTAL(): PromotionEffectPatchTargetScope
    {
        if (!isset(self::$LINETOTAL)) {
            self::$LINETOTAL = new PromotionEffectPatchTargetScope('line_total');
        }
        return self::$LINETOTAL;
    }
    public static function CARTSUBTOTAL(): PromotionEffectPatchTargetScope
    {
        if (!isset(self::$CARTSUBTOTAL)) {
            self::$CARTSUBTOTAL = new PromotionEffectPatchTargetScope('cart_subtotal');
        }
        return self::$CARTSUBTOTAL;
    }
    public static function GRANDTOTAL(): PromotionEffectPatchTargetScope
    {
        if (!isset(self::$GRANDTOTAL)) {
            self::$GRANDTOTAL = new PromotionEffectPatchTargetScope('grand_total');
        }
        return self::$GRANDTOTAL;
    }
    public static function SHIPPING(): PromotionEffectPatchTargetScope
    {
        if (!isset(self::$SHIPPING)) {
            self::$SHIPPING = new PromotionEffectPatchTargetScope('shipping');
        }
        return self::$SHIPPING;
    }
    public static function PAYMENTFEE(): PromotionEffectPatchTargetScope
    {
        if (!isset(self::$PAYMENTFEE)) {
            self::$PAYMENTFEE = new PromotionEffectPatchTargetScope('payment_fee');
        }
        return self::$PAYMENTFEE;
    }
}