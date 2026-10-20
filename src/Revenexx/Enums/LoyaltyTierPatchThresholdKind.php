<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyTierPatchThresholdKind implements JsonSerializable
{
    private static LoyaltyTierPatchThresholdKind $ABSOLUTE;
    private static LoyaltyTierPatchThresholdKind $RELATIVETOBASE;

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

    public static function ABSOLUTE(): LoyaltyTierPatchThresholdKind
    {
        if (!isset(self::$ABSOLUTE)) {
            self::$ABSOLUTE = new LoyaltyTierPatchThresholdKind('absolute');
        }
        return self::$ABSOLUTE;
    }
    public static function RELATIVETOBASE(): LoyaltyTierPatchThresholdKind
    {
        if (!isset(self::$RELATIVETOBASE)) {
            self::$RELATIVETOBASE = new LoyaltyTierPatchThresholdKind('relative_to_base');
        }
        return self::$RELATIVETOBASE;
    }
}