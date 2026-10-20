<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RedemptionReleaseReason implements JsonSerializable
{
    private static RedemptionReleaseReason $CARTRELEASED;
    private static RedemptionReleaseReason $ORDERCANCELLED;
    private static RedemptionReleaseReason $RETURNED;
    private static RedemptionReleaseReason $EXPIRED;

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

    public static function CARTRELEASED(): RedemptionReleaseReason
    {
        if (!isset(self::$CARTRELEASED)) {
            self::$CARTRELEASED = new RedemptionReleaseReason('cart_released');
        }
        return self::$CARTRELEASED;
    }
    public static function ORDERCANCELLED(): RedemptionReleaseReason
    {
        if (!isset(self::$ORDERCANCELLED)) {
            self::$ORDERCANCELLED = new RedemptionReleaseReason('order_cancelled');
        }
        return self::$ORDERCANCELLED;
    }
    public static function RETURNED(): RedemptionReleaseReason
    {
        if (!isset(self::$RETURNED)) {
            self::$RETURNED = new RedemptionReleaseReason('returned');
        }
        return self::$RETURNED;
    }
    public static function EXPIRED(): RedemptionReleaseReason
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new RedemptionReleaseReason('expired');
        }
        return self::$EXPIRED;
    }
}