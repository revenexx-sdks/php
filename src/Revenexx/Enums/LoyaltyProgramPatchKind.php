<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramPatchKind implements JsonSerializable
{
    private static LoyaltyProgramPatchKind $POINTS;
    private static LoyaltyProgramPatchKind $TURNOVERBONUS;

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

    public static function POINTS(): LoyaltyProgramPatchKind
    {
        if (!isset(self::$POINTS)) {
            self::$POINTS = new LoyaltyProgramPatchKind('points');
        }
        return self::$POINTS;
    }
    public static function TURNOVERBONUS(): LoyaltyProgramPatchKind
    {
        if (!isset(self::$TURNOVERBONUS)) {
            self::$TURNOVERBONUS = new LoyaltyProgramPatchKind('turnover_bonus');
        }
        return self::$TURNOVERBONUS;
    }
}