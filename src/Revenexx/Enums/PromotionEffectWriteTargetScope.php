<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectWriteTargetScope implements JsonSerializable
{
    private static PromotionEffectWriteTargetScope $UNITPRICE;
    private static PromotionEffectWriteTargetScope $LINETOTAL;
    private static PromotionEffectWriteTargetScope $CARTSUBTOTAL;
    private static PromotionEffectWriteTargetScope $GRANDTOTAL;
    private static PromotionEffectWriteTargetScope $SHIPPING;
    private static PromotionEffectWriteTargetScope $PAYMENTFEE;

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

    public static function UNITPRICE(): PromotionEffectWriteTargetScope
    {
        if (!isset(self::$UNITPRICE)) {
            self::$UNITPRICE = new PromotionEffectWriteTargetScope('unit_price');
        }
        return self::$UNITPRICE;
    }
    public static function LINETOTAL(): PromotionEffectWriteTargetScope
    {
        if (!isset(self::$LINETOTAL)) {
            self::$LINETOTAL = new PromotionEffectWriteTargetScope('line_total');
        }
        return self::$LINETOTAL;
    }
    public static function CARTSUBTOTAL(): PromotionEffectWriteTargetScope
    {
        if (!isset(self::$CARTSUBTOTAL)) {
            self::$CARTSUBTOTAL = new PromotionEffectWriteTargetScope('cart_subtotal');
        }
        return self::$CARTSUBTOTAL;
    }
    public static function GRANDTOTAL(): PromotionEffectWriteTargetScope
    {
        if (!isset(self::$GRANDTOTAL)) {
            self::$GRANDTOTAL = new PromotionEffectWriteTargetScope('grand_total');
        }
        return self::$GRANDTOTAL;
    }
    public static function SHIPPING(): PromotionEffectWriteTargetScope
    {
        if (!isset(self::$SHIPPING)) {
            self::$SHIPPING = new PromotionEffectWriteTargetScope('shipping');
        }
        return self::$SHIPPING;
    }
    public static function PAYMENTFEE(): PromotionEffectWriteTargetScope
    {
        if (!isset(self::$PAYMENTFEE)) {
            self::$PAYMENTFEE = new PromotionEffectWriteTargetScope('payment_fee');
        }
        return self::$PAYMENTFEE;
    }
}