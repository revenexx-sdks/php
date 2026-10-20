<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AssetApp implements JsonSerializable
{
    private static AssetApp $PROMOTIONS;
    private static AssetApp $MAILINGS;
    private static AssetApp $JOURNEYS;
    private static AssetApp $FORMS;
    private static AssetApp $PAGES;
    private static AssetApp $ADS;

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

    public static function PROMOTIONS(): AssetApp
    {
        if (!isset(self::$PROMOTIONS)) {
            self::$PROMOTIONS = new AssetApp('promotions');
        }
        return self::$PROMOTIONS;
    }
    public static function MAILINGS(): AssetApp
    {
        if (!isset(self::$MAILINGS)) {
            self::$MAILINGS = new AssetApp('mailings');
        }
        return self::$MAILINGS;
    }
    public static function JOURNEYS(): AssetApp
    {
        if (!isset(self::$JOURNEYS)) {
            self::$JOURNEYS = new AssetApp('journeys');
        }
        return self::$JOURNEYS;
    }
    public static function FORMS(): AssetApp
    {
        if (!isset(self::$FORMS)) {
            self::$FORMS = new AssetApp('forms');
        }
        return self::$FORMS;
    }
    public static function PAGES(): AssetApp
    {
        if (!isset(self::$PAGES)) {
            self::$PAGES = new AssetApp('pages');
        }
        return self::$PAGES;
    }
    public static function ADS(): AssetApp
    {
        if (!isset(self::$ADS)) {
            self::$ADS = new AssetApp('ads');
        }
        return self::$ADS;
    }
}