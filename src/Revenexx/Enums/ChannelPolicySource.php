<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelPolicySource implements JsonSerializable
{
    private static ChannelPolicySource $TENANT;
    private static ChannelPolicySource $CHANNEL;

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

    public static function TENANT(): ChannelPolicySource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new ChannelPolicySource('tenant');
        }
        return self::$TENANT;
    }
    public static function CHANNEL(): ChannelPolicySource
    {
        if (!isset(self::$CHANNEL)) {
            self::$CHANNEL = new ChannelPolicySource('channel');
        }
        return self::$CHANNEL;
    }
}