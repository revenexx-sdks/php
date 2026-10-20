<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignAssetClaim implements JsonSerializable
{
    private static CampaignAssetClaim $CAMPAIGNREF;
    private static CampaignAssetClaim $ROWONLY;

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

    public static function CAMPAIGNREF(): CampaignAssetClaim
    {
        if (!isset(self::$CAMPAIGNREF)) {
            self::$CAMPAIGNREF = new CampaignAssetClaim('campaign_ref');
        }
        return self::$CAMPAIGNREF;
    }
    public static function ROWONLY(): CampaignAssetClaim
    {
        if (!isset(self::$ROWONLY)) {
            self::$ROWONLY = new CampaignAssetClaim('row_only');
        }
        return self::$ROWONLY;
    }
}