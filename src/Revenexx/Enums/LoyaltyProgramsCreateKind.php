<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramsCreateKind implements JsonSerializable
{
    private static LoyaltyProgramsCreateKind $POINTS;
    private static LoyaltyProgramsCreateKind $TURNOVERBONUS;

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

    public static function POINTS(): LoyaltyProgramsCreateKind
    {
        if (!isset(self::$POINTS)) {
            self::$POINTS = new LoyaltyProgramsCreateKind('points');
        }
        return self::$POINTS;
    }
    public static function TURNOVERBONUS(): LoyaltyProgramsCreateKind
    {
        if (!isset(self::$TURNOVERBONUS)) {
            self::$TURNOVERBONUS = new LoyaltyProgramsCreateKind('turnover_bonus');
        }
        return self::$TURNOVERBONUS;
    }
}