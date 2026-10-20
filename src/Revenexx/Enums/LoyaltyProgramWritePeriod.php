<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramWritePeriod implements JsonSerializable
{
    private static LoyaltyProgramWritePeriod $CALENDARYEAR;
    private static LoyaltyProgramWritePeriod $ROLLING12M;

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

    public static function CALENDARYEAR(): LoyaltyProgramWritePeriod
    {
        if (!isset(self::$CALENDARYEAR)) {
            self::$CALENDARYEAR = new LoyaltyProgramWritePeriod('calendar_year');
        }
        return self::$CALENDARYEAR;
    }
    public static function ROLLING12M(): LoyaltyProgramWritePeriod
    {
        if (!isset(self::$ROLLING12M)) {
            self::$ROLLING12M = new LoyaltyProgramWritePeriod('rolling_12m');
        }
        return self::$ROLLING12M;
    }
}