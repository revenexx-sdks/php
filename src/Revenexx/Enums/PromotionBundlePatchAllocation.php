<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionBundlePatchAllocation implements JsonSerializable
{
    private static PromotionBundlePatchAllocation $BESTFORBUYER;
    private static PromotionBundlePatchAllocation $CARTORDER;

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

    public static function BESTFORBUYER(): PromotionBundlePatchAllocation
    {
        if (!isset(self::$BESTFORBUYER)) {
            self::$BESTFORBUYER = new PromotionBundlePatchAllocation('best_for_buyer');
        }
        return self::$BESTFORBUYER;
    }
    public static function CARTORDER(): PromotionBundlePatchAllocation
    {
        if (!isset(self::$CARTORDER)) {
            self::$CARTORDER = new PromotionBundlePatchAllocation('cart_order');
        }
        return self::$CARTORDER;
    }
}