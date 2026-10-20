<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramWriteKind implements JsonSerializable
{
    private static LoyaltyProgramWriteKind $POINTS;
    private static LoyaltyProgramWriteKind $TURNOVERBONUS;

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

    public static function POINTS(): LoyaltyProgramWriteKind
    {
        if (!isset(self::$POINTS)) {
            self::$POINTS = new LoyaltyProgramWriteKind('points');
        }
        return self::$POINTS;
    }
    public static function TURNOVERBONUS(): LoyaltyProgramWriteKind
    {
        if (!isset(self::$TURNOVERBONUS)) {
            self::$TURNOVERBONUS = new LoyaltyProgramWriteKind('turnover_bonus');
        }
        return self::$TURNOVERBONUS;
    }
}