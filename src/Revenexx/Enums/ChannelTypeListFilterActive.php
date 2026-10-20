<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelTypeListFilterActive implements JsonSerializable
{
    private static ChannelTypeListFilterActive $TRUE;
    private static ChannelTypeListFilterActive $FALSE;

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

    public static function TRUE(): ChannelTypeListFilterActive
    {
        if (!isset(self::$TRUE)) {
            self::$TRUE = new ChannelTypeListFilterActive('true');
        }
        return self::$TRUE;
    }
    public static function FALSE(): ChannelTypeListFilterActive
    {
        if (!isset(self::$FALSE)) {
            self::$FALSE = new ChannelTypeListFilterActive('false');
        }
        return self::$FALSE;
    }
}