<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionReleaseRequestReason implements JsonSerializable
{
    private static PromotionReleaseRequestReason $CARTRELEASED;
    private static PromotionReleaseRequestReason $ORDERCANCELLED;
    private static PromotionReleaseRequestReason $RETURNED;
    private static PromotionReleaseRequestReason $EXPIRED;

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

    public static function CARTRELEASED(): PromotionReleaseRequestReason
    {
        if (!isset(self::$CARTRELEASED)) {
            self::$CARTRELEASED = new PromotionReleaseRequestReason('cart_released');
        }
        return self::$CARTRELEASED;
    }
    public static function ORDERCANCELLED(): PromotionReleaseRequestReason
    {
        if (!isset(self::$ORDERCANCELLED)) {
            self::$ORDERCANCELLED = new PromotionReleaseRequestReason('order_cancelled');
        }
        return self::$ORDERCANCELLED;
    }
    public static function RETURNED(): PromotionReleaseRequestReason
    {
        if (!isset(self::$RETURNED)) {
            self::$RETURNED = new PromotionReleaseRequestReason('returned');
        }
        return self::$RETURNED;
    }
    public static function EXPIRED(): PromotionReleaseRequestReason
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new PromotionReleaseRequestReason('expired');
        }
        return self::$EXPIRED;
    }
}