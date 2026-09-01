<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelUnresolvedReason implements JsonSerializable
{
    private static ChannelUnresolvedReason $CHANNELREQUIRED;
    private static ChannelUnresolvedReason $NODEFAULTCHANNEL;
    private static ChannelUnresolvedReason $UNKNOWNCHANNEL;
    private static ChannelUnresolvedReason $CHANNELINACTIVE;

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

    public static function CHANNELREQUIRED(): ChannelUnresolvedReason
    {
        if (!isset(self::$CHANNELREQUIRED)) {
            self::$CHANNELREQUIRED = new ChannelUnresolvedReason('channel_required');
        }
        return self::$CHANNELREQUIRED;
    }
    public static function NODEFAULTCHANNEL(): ChannelUnresolvedReason
    {
        if (!isset(self::$NODEFAULTCHANNEL)) {
            self::$NODEFAULTCHANNEL = new ChannelUnresolvedReason('no_default_channel');
        }
        return self::$NODEFAULTCHANNEL;
    }
    public static function UNKNOWNCHANNEL(): ChannelUnresolvedReason
    {
        if (!isset(self::$UNKNOWNCHANNEL)) {
            self::$UNKNOWNCHANNEL = new ChannelUnresolvedReason('unknown_channel');
        }
        return self::$UNKNOWNCHANNEL;
    }
    public static function CHANNELINACTIVE(): ChannelUnresolvedReason
    {
        if (!isset(self::$CHANNELINACTIVE)) {
            self::$CHANNELINACTIVE = new ChannelUnresolvedReason('channel_inactive');
        }
        return self::$CHANNELINACTIVE;
    }
}