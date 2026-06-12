<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ChannelType implements JsonSerializable
{
    private static ChannelType $STOREFRONT;
    private static ChannelType $PUNCHOUT;
    private static ChannelType $MARKETPLACE;
    private static ChannelType $API;
    private static ChannelType $POS;

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

    public static function STOREFRONT(): ChannelType
    {
        if (!isset(self::$STOREFRONT)) {
            self::$STOREFRONT = new ChannelType('storefront');
        }
        return self::$STOREFRONT;
    }
    public static function PUNCHOUT(): ChannelType
    {
        if (!isset(self::$PUNCHOUT)) {
            self::$PUNCHOUT = new ChannelType('punchout');
        }
        return self::$PUNCHOUT;
    }
    public static function MARKETPLACE(): ChannelType
    {
        if (!isset(self::$MARKETPLACE)) {
            self::$MARKETPLACE = new ChannelType('marketplace');
        }
        return self::$MARKETPLACE;
    }
    public static function API(): ChannelType
    {
        if (!isset(self::$API)) {
            self::$API = new ChannelType('api');
        }
        return self::$API;
    }
    public static function POS(): ChannelType
    {
        if (!isset(self::$POS)) {
            self::$POS = new ChannelType('pos');
        }
        return self::$POS;
    }
}