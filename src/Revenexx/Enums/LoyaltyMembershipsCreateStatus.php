<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyMembershipsCreateStatus implements JsonSerializable
{
    private static LoyaltyMembershipsCreateStatus $ACTIVE;
    private static LoyaltyMembershipsCreateStatus $PAUSED;
    private static LoyaltyMembershipsCreateStatus $ENDED;

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

    public static function ACTIVE(): LoyaltyMembershipsCreateStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new LoyaltyMembershipsCreateStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): LoyaltyMembershipsCreateStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new LoyaltyMembershipsCreateStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ENDED(): LoyaltyMembershipsCreateStatus
    {
        if (!isset(self::$ENDED)) {
            self::$ENDED = new LoyaltyMembershipsCreateStatus('ended');
        }
        return self::$ENDED;
    }
}