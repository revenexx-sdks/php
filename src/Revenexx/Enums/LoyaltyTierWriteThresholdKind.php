<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyTierWriteThresholdKind implements JsonSerializable
{
    private static LoyaltyTierWriteThresholdKind $ABSOLUTE;
    private static LoyaltyTierWriteThresholdKind $RELATIVETOBASE;

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

    public static function ABSOLUTE(): LoyaltyTierWriteThresholdKind
    {
        if (!isset(self::$ABSOLUTE)) {
            self::$ABSOLUTE = new LoyaltyTierWriteThresholdKind('absolute');
        }
        return self::$ABSOLUTE;
    }
    public static function RELATIVETOBASE(): LoyaltyTierWriteThresholdKind
    {
        if (!isset(self::$RELATIVETOBASE)) {
            self::$RELATIVETOBASE = new LoyaltyTierWriteThresholdKind('relative_to_base');
        }
        return self::$RELATIVETOBASE;
    }
}