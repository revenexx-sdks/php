<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeValueBucket implements JsonSerializable
{
    private static AttributeValueBucket $COMMON;
    private static AttributeValueBucket $LOCALESPECIFIC;
    private static AttributeValueBucket $CHANNELSPECIFIC;
    private static AttributeValueBucket $CHANNELLOCALESPECIFIC;

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

    public static function COMMON(): AttributeValueBucket
    {
        if (!isset(self::$COMMON)) {
            self::$COMMON = new AttributeValueBucket('common');
        }
        return self::$COMMON;
    }
    public static function LOCALESPECIFIC(): AttributeValueBucket
    {
        if (!isset(self::$LOCALESPECIFIC)) {
            self::$LOCALESPECIFIC = new AttributeValueBucket('locale_specific');
        }
        return self::$LOCALESPECIFIC;
    }
    public static function CHANNELSPECIFIC(): AttributeValueBucket
    {
        if (!isset(self::$CHANNELSPECIFIC)) {
            self::$CHANNELSPECIFIC = new AttributeValueBucket('channel_specific');
        }
        return self::$CHANNELSPECIFIC;
    }
    public static function CHANNELLOCALESPECIFIC(): AttributeValueBucket
    {
        if (!isset(self::$CHANNELLOCALESPECIFIC)) {
            self::$CHANNELLOCALESPECIFIC = new AttributeValueBucket('channel_locale_specific');
        }
        return self::$CHANNELLOCALESPECIFIC;
    }
}