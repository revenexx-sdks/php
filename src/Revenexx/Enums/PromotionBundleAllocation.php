<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionBundleAllocation implements JsonSerializable
{
    private static PromotionBundleAllocation $BESTFORBUYER;
    private static PromotionBundleAllocation $CARTORDER;

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

    public static function BESTFORBUYER(): PromotionBundleAllocation
    {
        if (!isset(self::$BESTFORBUYER)) {
            self::$BESTFORBUYER = new PromotionBundleAllocation('best_for_buyer');
        }
        return self::$BESTFORBUYER;
    }
    public static function CARTORDER(): PromotionBundleAllocation
    {
        if (!isset(self::$CARTORDER)) {
            self::$CARTORDER = new PromotionBundleAllocation('cart_order');
        }
        return self::$CARTORDER;
    }
}