<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelTypeTone implements JsonSerializable
{
    private static ChannelTypeTone $NEUTRAL;
    private static ChannelTypeTone $INFO;
    private static ChannelTypeTone $SUCCESS;
    private static ChannelTypeTone $WARNING;
    private static ChannelTypeTone $DANGER;

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

    public static function NEUTRAL(): ChannelTypeTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ChannelTypeTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ChannelTypeTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ChannelTypeTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ChannelTypeTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ChannelTypeTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ChannelTypeTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ChannelTypeTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ChannelTypeTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ChannelTypeTone('danger');
        }
        return self::$DANGER;
    }
}