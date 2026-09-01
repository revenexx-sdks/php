<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelInactiveBehavior implements JsonSerializable
{
    private static ChannelInactiveBehavior $SERVE;
    private static ChannelInactiveBehavior $BLOCK;

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

    public static function SERVE(): ChannelInactiveBehavior
    {
        if (!isset(self::$SERVE)) {
            self::$SERVE = new ChannelInactiveBehavior('serve');
        }
        return self::$SERVE;
    }
    public static function BLOCK(): ChannelInactiveBehavior
    {
        if (!isset(self::$BLOCK)) {
            self::$BLOCK = new ChannelInactiveBehavior('block');
        }
        return self::$BLOCK;
    }
}