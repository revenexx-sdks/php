<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FeedRefPatchDestination implements JsonSerializable
{
    private static FeedRefPatchDestination $GOOGLEMERCHANTCENTER;
    private static FeedRefPatchDestination $METACATALOG;
    private static FeedRefPatchDestination $LINKEDIN;
    private static FeedRefPatchDestination $OTHER;

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

    public static function GOOGLEMERCHANTCENTER(): FeedRefPatchDestination
    {
        if (!isset(self::$GOOGLEMERCHANTCENTER)) {
            self::$GOOGLEMERCHANTCENTER = new FeedRefPatchDestination('google_merchant_center');
        }
        return self::$GOOGLEMERCHANTCENTER;
    }
    public static function METACATALOG(): FeedRefPatchDestination
    {
        if (!isset(self::$METACATALOG)) {
            self::$METACATALOG = new FeedRefPatchDestination('meta_catalog');
        }
        return self::$METACATALOG;
    }
    public static function LINKEDIN(): FeedRefPatchDestination
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new FeedRefPatchDestination('linkedin');
        }
        return self::$LINKEDIN;
    }
    public static function OTHER(): FeedRefPatchDestination
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new FeedRefPatchDestination('other');
        }
        return self::$OTHER;
    }
}