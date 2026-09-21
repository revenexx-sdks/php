<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TargetScope implements JsonSerializable
{
    private static TargetScope $UNITPRICE;
    private static TargetScope $LINETOTAL;
    private static TargetScope $CARTSUBTOTAL;
    private static TargetScope $GRANDTOTAL;
    private static TargetScope $SHIPPING;
    private static TargetScope $PAYMENTFEE;

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

    public static function UNITPRICE(): TargetScope
    {
        if (!isset(self::$UNITPRICE)) {
            self::$UNITPRICE = new TargetScope('unit_price');
        }
        return self::$UNITPRICE;
    }
    public static function LINETOTAL(): TargetScope
    {
        if (!isset(self::$LINETOTAL)) {
            self::$LINETOTAL = new TargetScope('line_total');
        }
        return self::$LINETOTAL;
    }
    public static function CARTSUBTOTAL(): TargetScope
    {
        if (!isset(self::$CARTSUBTOTAL)) {
            self::$CARTSUBTOTAL = new TargetScope('cart_subtotal');
        }
        return self::$CARTSUBTOTAL;
    }
    public static function GRANDTOTAL(): TargetScope
    {
        if (!isset(self::$GRANDTOTAL)) {
            self::$GRANDTOTAL = new TargetScope('grand_total');
        }
        return self::$GRANDTOTAL;
    }
    public static function SHIPPING(): TargetScope
    {
        if (!isset(self::$SHIPPING)) {
            self::$SHIPPING = new TargetScope('shipping');
        }
        return self::$SHIPPING;
    }
    public static function PAYMENTFEE(): TargetScope
    {
        if (!isset(self::$PAYMENTFEE)) {
            self::$PAYMENTFEE = new TargetScope('payment_fee');
        }
        return self::$PAYMENTFEE;
    }
}