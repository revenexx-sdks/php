<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramPeriod implements JsonSerializable
{
    private static LoyaltyProgramPeriod $CALENDARYEAR;
    private static LoyaltyProgramPeriod $ROLLING12M;

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

    public static function CALENDARYEAR(): LoyaltyProgramPeriod
    {
        if (!isset(self::$CALENDARYEAR)) {
            self::$CALENDARYEAR = new LoyaltyProgramPeriod('calendar_year');
        }
        return self::$CALENDARYEAR;
    }
    public static function ROLLING12M(): LoyaltyProgramPeriod
    {
        if (!isset(self::$ROLLING12M)) {
            self::$ROLLING12M = new LoyaltyProgramPeriod('rolling_12m');
        }
        return self::$ROLLING12M;
    }
}