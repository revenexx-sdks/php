<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ChannelStatus implements JsonSerializable
{
    private static ChannelStatus $ACTIVE;
    private static ChannelStatus $INACTIVE;

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

    public static function ACTIVE(): ChannelStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new ChannelStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function INACTIVE(): ChannelStatus
    {
        if (!isset(self::$INACTIVE)) {
            self::$INACTIVE = new ChannelStatus('inactive');
        }
        return self::$INACTIVE;
    }
}