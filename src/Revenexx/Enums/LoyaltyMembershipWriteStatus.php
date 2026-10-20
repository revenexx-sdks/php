<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyMembershipWriteStatus implements JsonSerializable
{
    private static LoyaltyMembershipWriteStatus $ACTIVE;
    private static LoyaltyMembershipWriteStatus $PAUSED;
    private static LoyaltyMembershipWriteStatus $ENDED;

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

    public static function ACTIVE(): LoyaltyMembershipWriteStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new LoyaltyMembershipWriteStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): LoyaltyMembershipWriteStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new LoyaltyMembershipWriteStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ENDED(): LoyaltyMembershipWriteStatus
    {
        if (!isset(self::$ENDED)) {
            self::$ENDED = new LoyaltyMembershipWriteStatus('ended');
        }
        return self::$ENDED;
    }
}