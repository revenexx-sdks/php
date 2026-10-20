<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignDetachRequestAssetApp implements JsonSerializable
{
    private static CampaignDetachRequestAssetApp $PROMOTIONS;
    private static CampaignDetachRequestAssetApp $MAILINGS;
    private static CampaignDetachRequestAssetApp $JOURNEYS;
    private static CampaignDetachRequestAssetApp $FORMS;
    private static CampaignDetachRequestAssetApp $PAGES;
    private static CampaignDetachRequestAssetApp $ADS;

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

    public static function PROMOTIONS(): CampaignDetachRequestAssetApp
    {
        if (!isset(self::$PROMOTIONS)) {
            self::$PROMOTIONS = new CampaignDetachRequestAssetApp('promotions');
        }
        return self::$PROMOTIONS;
    }
    public static function MAILINGS(): CampaignDetachRequestAssetApp
    {
        if (!isset(self::$MAILINGS)) {
            self::$MAILINGS = new CampaignDetachRequestAssetApp('mailings');
        }
        return self::$MAILINGS;
    }
    public static function JOURNEYS(): CampaignDetachRequestAssetApp
    {
        if (!isset(self::$JOURNEYS)) {
            self::$JOURNEYS = new CampaignDetachRequestAssetApp('journeys');
        }
        return self::$JOURNEYS;
    }
    public static function FORMS(): CampaignDetachRequestAssetApp
    {
        if (!isset(self::$FORMS)) {
            self::$FORMS = new CampaignDetachRequestAssetApp('forms');
        }
        return self::$FORMS;
    }
    public static function PAGES(): CampaignDetachRequestAssetApp
    {
        if (!isset(self::$PAGES)) {
            self::$PAGES = new CampaignDetachRequestAssetApp('pages');
        }
        return self::$PAGES;
    }
    public static function ADS(): CampaignDetachRequestAssetApp
    {
        if (!isset(self::$ADS)) {
            self::$ADS = new CampaignDetachRequestAssetApp('ads');
        }
        return self::$ADS;
    }
}