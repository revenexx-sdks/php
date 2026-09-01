<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelPolicyTenantDefault implements JsonSerializable
{
    private static ChannelPolicyTenantDefault $ALL;
    private static ChannelPolicyTenantDefault $ASSIGNEDONLY;

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

    public static function ALL(): ChannelPolicyTenantDefault
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new ChannelPolicyTenantDefault('all');
        }
        return self::$ALL;
    }
    public static function ASSIGNEDONLY(): ChannelPolicyTenantDefault
    {
        if (!isset(self::$ASSIGNEDONLY)) {
            self::$ASSIGNEDONLY = new ChannelPolicyTenantDefault('assigned_only');
        }
        return self::$ASSIGNEDONLY;
    }
}