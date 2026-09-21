<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionsRedemptionsReleaseReason implements JsonSerializable
{
    private static PromotionsRedemptionsReleaseReason $CARTRELEASED;
    private static PromotionsRedemptionsReleaseReason $ORDERCANCELLED;
    private static PromotionsRedemptionsReleaseReason $RETURNED;
    private static PromotionsRedemptionsReleaseReason $EXPIRED;

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

    public static function CARTRELEASED(): PromotionsRedemptionsReleaseReason
    {
        if (!isset(self::$CARTRELEASED)) {
            self::$CARTRELEASED = new PromotionsRedemptionsReleaseReason('cart_released');
        }
        return self::$CARTRELEASED;
    }
    public static function ORDERCANCELLED(): PromotionsRedemptionsReleaseReason
    {
        if (!isset(self::$ORDERCANCELLED)) {
            self::$ORDERCANCELLED = new PromotionsRedemptionsReleaseReason('order_cancelled');
        }
        return self::$ORDERCANCELLED;
    }
    public static function RETURNED(): PromotionsRedemptionsReleaseReason
    {
        if (!isset(self::$RETURNED)) {
            self::$RETURNED = new PromotionsRedemptionsReleaseReason('returned');
        }
        return self::$RETURNED;
    }
    public static function EXPIRED(): PromotionsRedemptionsReleaseReason
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new PromotionsRedemptionsReleaseReason('expired');
        }
        return self::$EXPIRED;
    }
}