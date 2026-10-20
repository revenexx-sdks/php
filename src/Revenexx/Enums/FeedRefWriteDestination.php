<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FeedRefWriteDestination implements JsonSerializable
{
    private static FeedRefWriteDestination $GOOGLEMERCHANTCENTER;
    private static FeedRefWriteDestination $METACATALOG;
    private static FeedRefWriteDestination $LINKEDIN;
    private static FeedRefWriteDestination $OTHER;

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

    public static function GOOGLEMERCHANTCENTER(): FeedRefWriteDestination
    {
        if (!isset(self::$GOOGLEMERCHANTCENTER)) {
            self::$GOOGLEMERCHANTCENTER = new FeedRefWriteDestination('google_merchant_center');
        }
        return self::$GOOGLEMERCHANTCENTER;
    }
    public static function METACATALOG(): FeedRefWriteDestination
    {
        if (!isset(self::$METACATALOG)) {
            self::$METACATALOG = new FeedRefWriteDestination('meta_catalog');
        }
        return self::$METACATALOG;
    }
    public static function LINKEDIN(): FeedRefWriteDestination
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new FeedRefWriteDestination('linkedin');
        }
        return self::$LINKEDIN;
    }
    public static function OTHER(): FeedRefWriteDestination
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new FeedRefWriteDestination('other');
        }
        return self::$OTHER;
    }
}