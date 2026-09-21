<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionBundleWriteAllocation implements JsonSerializable
{
    private static PromotionBundleWriteAllocation $BESTFORBUYER;
    private static PromotionBundleWriteAllocation $CARTORDER;

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

    public static function BESTFORBUYER(): PromotionBundleWriteAllocation
    {
        if (!isset(self::$BESTFORBUYER)) {
            self::$BESTFORBUYER = new PromotionBundleWriteAllocation('best_for_buyer');
        }
        return self::$BESTFORBUYER;
    }
    public static function CARTORDER(): PromotionBundleWriteAllocation
    {
        if (!isset(self::$CARTORDER)) {
            self::$CARTORDER = new PromotionBundleWriteAllocation('cart_order');
        }
        return self::$CARTORDER;
    }
}