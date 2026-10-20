<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyTierThresholdKind implements JsonSerializable
{
    private static LoyaltyTierThresholdKind $ABSOLUTE;
    private static LoyaltyTierThresholdKind $RELATIVETOBASE;

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

    public static function ABSOLUTE(): LoyaltyTierThresholdKind
    {
        if (!isset(self::$ABSOLUTE)) {
            self::$ABSOLUTE = new LoyaltyTierThresholdKind('absolute');
        }
        return self::$ABSOLUTE;
    }
    public static function RELATIVETOBASE(): LoyaltyTierThresholdKind
    {
        if (!isset(self::$RELATIVETOBASE)) {
            self::$RELATIVETOBASE = new LoyaltyTierThresholdKind('relative_to_base');
        }
        return self::$RELATIVETOBASE;
    }
}