<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelUnassignedVisibility implements JsonSerializable
{
    private static ChannelUnassignedVisibility $INHERIT;
    private static ChannelUnassignedVisibility $ALL;
    private static ChannelUnassignedVisibility $ASSIGNEDONLY;

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

    public static function INHERIT(): ChannelUnassignedVisibility
    {
        if (!isset(self::$INHERIT)) {
            self::$INHERIT = new ChannelUnassignedVisibility('inherit');
        }
        return self::$INHERIT;
    }
    public static function ALL(): ChannelUnassignedVisibility
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new ChannelUnassignedVisibility('all');
        }
        return self::$ALL;
    }
    public static function ASSIGNEDONLY(): ChannelUnassignedVisibility
    {
        if (!isset(self::$ASSIGNEDONLY)) {
            self::$ASSIGNEDONLY = new ChannelUnassignedVisibility('assigned_only');
        }
        return self::$ASSIGNEDONLY;
    }
}