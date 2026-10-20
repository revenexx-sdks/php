<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramKind implements JsonSerializable
{
    private static LoyaltyProgramKind $POINTS;
    private static LoyaltyProgramKind $TURNOVERBONUS;

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

    public static function POINTS(): LoyaltyProgramKind
    {
        if (!isset(self::$POINTS)) {
            self::$POINTS = new LoyaltyProgramKind('points');
        }
        return self::$POINTS;
    }
    public static function TURNOVERBONUS(): LoyaltyProgramKind
    {
        if (!isset(self::$TURNOVERBONUS)) {
            self::$TURNOVERBONUS = new LoyaltyProgramKind('turnover_bonus');
        }
        return self::$TURNOVERBONUS;
    }
}