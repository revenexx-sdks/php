<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelVisibilityReason implements JsonSerializable
{
    private static ChannelVisibilityReason $ASSIGNED;
    private static ChannelVisibilityReason $NOTASSIGNEDTOCHANNEL;
    private static ChannelVisibilityReason $UNASSIGNEDOPEN;
    private static ChannelVisibilityReason $UNASSIGNEDCLOSED;
    private static ChannelVisibilityReason $NOCHANNELCONTEXT;

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

    public static function ASSIGNED(): ChannelVisibilityReason
    {
        if (!isset(self::$ASSIGNED)) {
            self::$ASSIGNED = new ChannelVisibilityReason('assigned');
        }
        return self::$ASSIGNED;
    }
    public static function NOTASSIGNEDTOCHANNEL(): ChannelVisibilityReason
    {
        if (!isset(self::$NOTASSIGNEDTOCHANNEL)) {
            self::$NOTASSIGNEDTOCHANNEL = new ChannelVisibilityReason('not_assigned_to_channel');
        }
        return self::$NOTASSIGNEDTOCHANNEL;
    }
    public static function UNASSIGNEDOPEN(): ChannelVisibilityReason
    {
        if (!isset(self::$UNASSIGNEDOPEN)) {
            self::$UNASSIGNEDOPEN = new ChannelVisibilityReason('unassigned_open');
        }
        return self::$UNASSIGNEDOPEN;
    }
    public static function UNASSIGNEDCLOSED(): ChannelVisibilityReason
    {
        if (!isset(self::$UNASSIGNEDCLOSED)) {
            self::$UNASSIGNEDCLOSED = new ChannelVisibilityReason('unassigned_closed');
        }
        return self::$UNASSIGNEDCLOSED;
    }
    public static function NOCHANNELCONTEXT(): ChannelVisibilityReason
    {
        if (!isset(self::$NOCHANNELCONTEXT)) {
            self::$NOCHANNELCONTEXT = new ChannelVisibilityReason('no_channel_context');
        }
        return self::$NOCHANNELCONTEXT;
    }
}