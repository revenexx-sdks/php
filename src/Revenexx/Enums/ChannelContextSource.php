<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelContextSource implements JsonSerializable
{
    private static ChannelContextSource $BODY;
    private static ChannelContextSource $QUERY;
    private static ChannelContextSource $HEADER;
    private static ChannelContextSource $JWT;
    private static ChannelContextSource $DEFAULT;

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

    public static function BODY(): ChannelContextSource
    {
        if (!isset(self::$BODY)) {
            self::$BODY = new ChannelContextSource('body');
        }
        return self::$BODY;
    }
    public static function QUERY(): ChannelContextSource
    {
        if (!isset(self::$QUERY)) {
            self::$QUERY = new ChannelContextSource('query');
        }
        return self::$QUERY;
    }
    public static function HEADER(): ChannelContextSource
    {
        if (!isset(self::$HEADER)) {
            self::$HEADER = new ChannelContextSource('header');
        }
        return self::$HEADER;
    }
    public static function JWT(): ChannelContextSource
    {
        if (!isset(self::$JWT)) {
            self::$JWT = new ChannelContextSource('jwt');
        }
        return self::$JWT;
    }
    public static function DEFAULT(): ChannelContextSource
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new ChannelContextSource('default');
        }
        return self::$DEFAULT;
    }
}