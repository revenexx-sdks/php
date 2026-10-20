<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RewardRedemptionState implements JsonSerializable
{
    private static RewardRedemptionState $ISSUED;
    private static RewardRedemptionState $USED;
    private static RewardRedemptionState $CANCELLED;

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

    public static function ISSUED(): RewardRedemptionState
    {
        if (!isset(self::$ISSUED)) {
            self::$ISSUED = new RewardRedemptionState('issued');
        }
        return self::$ISSUED;
    }
    public static function USED(): RewardRedemptionState
    {
        if (!isset(self::$USED)) {
            self::$USED = new RewardRedemptionState('used');
        }
        return self::$USED;
    }
    public static function CANCELLED(): RewardRedemptionState
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new RewardRedemptionState('cancelled');
        }
        return self::$CANCELLED;
    }
}