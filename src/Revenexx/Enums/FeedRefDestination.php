<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FeedRefDestination implements JsonSerializable
{
    private static FeedRefDestination $GOOGLEMERCHANTCENTER;
    private static FeedRefDestination $METACATALOG;
    private static FeedRefDestination $LINKEDIN;
    private static FeedRefDestination $OTHER;

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

    public static function GOOGLEMERCHANTCENTER(): FeedRefDestination
    {
        if (!isset(self::$GOOGLEMERCHANTCENTER)) {
            self::$GOOGLEMERCHANTCENTER = new FeedRefDestination('google_merchant_center');
        }
        return self::$GOOGLEMERCHANTCENTER;
    }
    public static function METACATALOG(): FeedRefDestination
    {
        if (!isset(self::$METACATALOG)) {
            self::$METACATALOG = new FeedRefDestination('meta_catalog');
        }
        return self::$METACATALOG;
    }
    public static function LINKEDIN(): FeedRefDestination
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new FeedRefDestination('linkedin');
        }
        return self::$LINKEDIN;
    }
    public static function OTHER(): FeedRefDestination
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new FeedRefDestination('other');
        }
        return self::$OTHER;
    }
}