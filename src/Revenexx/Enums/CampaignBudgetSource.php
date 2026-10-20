<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignBudgetSource implements JsonSerializable
{
    private static CampaignBudgetSource $MANUAL;
    private static CampaignBudgetSource $ADS;

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

    public static function MANUAL(): CampaignBudgetSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new CampaignBudgetSource('manual');
        }
        return self::$MANUAL;
    }
    public static function ADS(): CampaignBudgetSource
    {
        if (!isset(self::$ADS)) {
            self::$ADS = new CampaignBudgetSource('ads');
        }
        return self::$ADS;
    }
}