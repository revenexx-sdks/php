<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignAttachRequestAssetApp implements JsonSerializable
{
    private static CampaignAttachRequestAssetApp $PROMOTIONS;
    private static CampaignAttachRequestAssetApp $MAILINGS;
    private static CampaignAttachRequestAssetApp $JOURNEYS;
    private static CampaignAttachRequestAssetApp $FORMS;
    private static CampaignAttachRequestAssetApp $PAGES;
    private static CampaignAttachRequestAssetApp $ADS;

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

    public static function PROMOTIONS(): CampaignAttachRequestAssetApp
    {
        if (!isset(self::$PROMOTIONS)) {
            self::$PROMOTIONS = new CampaignAttachRequestAssetApp('promotions');
        }
        return self::$PROMOTIONS;
    }
    public static function MAILINGS(): CampaignAttachRequestAssetApp
    {
        if (!isset(self::$MAILINGS)) {
            self::$MAILINGS = new CampaignAttachRequestAssetApp('mailings');
        }
        return self::$MAILINGS;
    }
    public static function JOURNEYS(): CampaignAttachRequestAssetApp
    {
        if (!isset(self::$JOURNEYS)) {
            self::$JOURNEYS = new CampaignAttachRequestAssetApp('journeys');
        }
        return self::$JOURNEYS;
    }
    public static function FORMS(): CampaignAttachRequestAssetApp
    {
        if (!isset(self::$FORMS)) {
            self::$FORMS = new CampaignAttachRequestAssetApp('forms');
        }
        return self::$FORMS;
    }
    public static function PAGES(): CampaignAttachRequestAssetApp
    {
        if (!isset(self::$PAGES)) {
            self::$PAGES = new CampaignAttachRequestAssetApp('pages');
        }
        return self::$PAGES;
    }
    public static function ADS(): CampaignAttachRequestAssetApp
    {
        if (!isset(self::$ADS)) {
            self::$ADS = new CampaignAttachRequestAssetApp('ads');
        }
        return self::$ADS;
    }
}