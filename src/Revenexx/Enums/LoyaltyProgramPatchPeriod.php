<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramPatchPeriod implements JsonSerializable
{
    private static LoyaltyProgramPatchPeriod $CALENDARYEAR;
    private static LoyaltyProgramPatchPeriod $ROLLING12M;

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

    public static function CALENDARYEAR(): LoyaltyProgramPatchPeriod
    {
        if (!isset(self::$CALENDARYEAR)) {
            self::$CALENDARYEAR = new LoyaltyProgramPatchPeriod('calendar_year');
        }
        return self::$CALENDARYEAR;
    }
    public static function ROLLING12M(): LoyaltyProgramPatchPeriod
    {
        if (!isset(self::$ROLLING12M)) {
            self::$ROLLING12M = new LoyaltyProgramPatchPeriod('rolling_12m');
        }
        return self::$ROLLING12M;
    }
}