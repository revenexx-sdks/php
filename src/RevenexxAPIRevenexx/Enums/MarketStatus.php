<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class MarketStatus implements JsonSerializable
{
    private static MarketStatus $ACTIVE;
    private static MarketStatus $INACTIVE;

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

    public static function ACTIVE(): MarketStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new MarketStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function INACTIVE(): MarketStatus
    {
        if (!isset(self::$INACTIVE)) {
            self::$INACTIVE = new MarketStatus('inactive');
        }
        return self::$INACTIVE;
    }
}