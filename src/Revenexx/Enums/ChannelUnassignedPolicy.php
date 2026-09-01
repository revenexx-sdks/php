<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelUnassignedPolicy implements JsonSerializable
{
    private static ChannelUnassignedPolicy $ALL;
    private static ChannelUnassignedPolicy $ASSIGNEDONLY;

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

    public static function ALL(): ChannelUnassignedPolicy
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new ChannelUnassignedPolicy('all');
        }
        return self::$ALL;
    }
    public static function ASSIGNEDONLY(): ChannelUnassignedPolicy
    {
        if (!isset(self::$ASSIGNEDONLY)) {
            self::$ASSIGNEDONLY = new ChannelUnassignedPolicy('assigned_only');
        }
        return self::$ASSIGNEDONLY;
    }
}