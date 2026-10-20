<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyMembershipPatchStatus implements JsonSerializable
{
    private static LoyaltyMembershipPatchStatus $ACTIVE;
    private static LoyaltyMembershipPatchStatus $PAUSED;
    private static LoyaltyMembershipPatchStatus $ENDED;

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

    public static function ACTIVE(): LoyaltyMembershipPatchStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new LoyaltyMembershipPatchStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): LoyaltyMembershipPatchStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new LoyaltyMembershipPatchStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ENDED(): LoyaltyMembershipPatchStatus
    {
        if (!isset(self::$ENDED)) {
            self::$ENDED = new LoyaltyMembershipPatchStatus('ended');
        }
        return self::$ENDED;
    }
}