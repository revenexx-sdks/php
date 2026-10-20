<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignAssetAssetApp implements JsonSerializable
{
    private static CampaignAssetAssetApp $PROMOTIONS;
    private static CampaignAssetAssetApp $MAILINGS;
    private static CampaignAssetAssetApp $JOURNEYS;
    private static CampaignAssetAssetApp $FORMS;
    private static CampaignAssetAssetApp $PAGES;
    private static CampaignAssetAssetApp $ADS;

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

    public static function PROMOTIONS(): CampaignAssetAssetApp
    {
        if (!isset(self::$PROMOTIONS)) {
            self::$PROMOTIONS = new CampaignAssetAssetApp('promotions');
        }
        return self::$PROMOTIONS;
    }
    public static function MAILINGS(): CampaignAssetAssetApp
    {
        if (!isset(self::$MAILINGS)) {
            self::$MAILINGS = new CampaignAssetAssetApp('mailings');
        }
        return self::$MAILINGS;
    }
    public static function JOURNEYS(): CampaignAssetAssetApp
    {
        if (!isset(self::$JOURNEYS)) {
            self::$JOURNEYS = new CampaignAssetAssetApp('journeys');
        }
        return self::$JOURNEYS;
    }
    public static function FORMS(): CampaignAssetAssetApp
    {
        if (!isset(self::$FORMS)) {
            self::$FORMS = new CampaignAssetAssetApp('forms');
        }
        return self::$FORMS;
    }
    public static function PAGES(): CampaignAssetAssetApp
    {
        if (!isset(self::$PAGES)) {
            self::$PAGES = new CampaignAssetAssetApp('pages');
        }
        return self::$PAGES;
    }
    public static function ADS(): CampaignAssetAssetApp
    {
        if (!isset(self::$ADS)) {
            self::$ADS = new CampaignAssetAssetApp('ads');
        }
        return self::$ADS;
    }
}