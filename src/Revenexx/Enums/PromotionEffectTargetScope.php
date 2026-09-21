<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectTargetScope implements JsonSerializable
{
    private static PromotionEffectTargetScope $UNITPRICE;
    private static PromotionEffectTargetScope $LINETOTAL;
    private static PromotionEffectTargetScope $CARTSUBTOTAL;
    private static PromotionEffectTargetScope $GRANDTOTAL;
    private static PromotionEffectTargetScope $SHIPPING;
    private static PromotionEffectTargetScope $PAYMENTFEE;

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

    public static function UNITPRICE(): PromotionEffectTargetScope
    {
        if (!isset(self::$UNITPRICE)) {
            self::$UNITPRICE = new PromotionEffectTargetScope('unit_price');
        }
        return self::$UNITPRICE;
    }
    public static function LINETOTAL(): PromotionEffectTargetScope
    {
        if (!isset(self::$LINETOTAL)) {
            self::$LINETOTAL = new PromotionEffectTargetScope('line_total');
        }
        return self::$LINETOTAL;
    }
    public static function CARTSUBTOTAL(): PromotionEffectTargetScope
    {
        if (!isset(self::$CARTSUBTOTAL)) {
            self::$CARTSUBTOTAL = new PromotionEffectTargetScope('cart_subtotal');
        }
        return self::$CARTSUBTOTAL;
    }
    public static function GRANDTOTAL(): PromotionEffectTargetScope
    {
        if (!isset(self::$GRANDTOTAL)) {
            self::$GRANDTOTAL = new PromotionEffectTargetScope('grand_total');
        }
        return self::$GRANDTOTAL;
    }
    public static function SHIPPING(): PromotionEffectTargetScope
    {
        if (!isset(self::$SHIPPING)) {
            self::$SHIPPING = new PromotionEffectTargetScope('shipping');
        }
        return self::$SHIPPING;
    }
    public static function PAYMENTFEE(): PromotionEffectTargetScope
    {
        if (!isset(self::$PAYMENTFEE)) {
            self::$PAYMENTFEE = new PromotionEffectTargetScope('payment_fee');
        }
        return self::$PAYMENTFEE;
    }
}