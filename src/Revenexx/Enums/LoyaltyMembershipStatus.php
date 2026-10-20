<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyMembershipStatus implements JsonSerializable
{
    private static LoyaltyMembershipStatus $ACTIVE;
    private static LoyaltyMembershipStatus $PAUSED;
    private static LoyaltyMembershipStatus $ENDED;

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

    public static function ACTIVE(): LoyaltyMembershipStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new LoyaltyMembershipStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): LoyaltyMembershipStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new LoyaltyMembershipStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ENDED(): LoyaltyMembershipStatus
    {
        if (!isset(self::$ENDED)) {
            self::$ENDED = new LoyaltyMembershipStatus('ended');
        }
        return self::$ENDED;
    }
}