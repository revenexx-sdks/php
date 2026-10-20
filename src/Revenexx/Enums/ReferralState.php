<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReferralState implements JsonSerializable
{
    private static ReferralState $PENDING;
    private static ReferralState $QUALIFIED;
    private static ReferralState $REWARDED;
    private static ReferralState $REJECTED;

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

    public static function PENDING(): ReferralState
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ReferralState('pending');
        }
        return self::$PENDING;
    }
    public static function QUALIFIED(): ReferralState
    {
        if (!isset(self::$QUALIFIED)) {
            self::$QUALIFIED = new ReferralState('qualified');
        }
        return self::$QUALIFIED;
    }
    public static function REWARDED(): ReferralState
    {
        if (!isset(self::$REWARDED)) {
            self::$REWARDED = new ReferralState('rewarded');
        }
        return self::$REWARDED;
    }
    public static function REJECTED(): ReferralState
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new ReferralState('rejected');
        }
        return self::$REJECTED;
    }
}