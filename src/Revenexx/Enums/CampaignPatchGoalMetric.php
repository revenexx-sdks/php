<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignPatchGoalMetric implements JsonSerializable
{
    private static CampaignPatchGoalMetric $REVENUE;
    private static CampaignPatchGoalMetric $ORDERS;
    private static CampaignPatchGoalMetric $REDEMPTIONS;
    private static CampaignPatchGoalMetric $LEADS;
    private static CampaignPatchGoalMetric $SUBSCRIPTIONS;
    private static CampaignPatchGoalMetric $CLICKS;

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

    public static function REVENUE(): CampaignPatchGoalMetric
    {
        if (!isset(self::$REVENUE)) {
            self::$REVENUE = new CampaignPatchGoalMetric('revenue');
        }
        return self::$REVENUE;
    }
    public static function ORDERS(): CampaignPatchGoalMetric
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new CampaignPatchGoalMetric('orders');
        }
        return self::$ORDERS;
    }
    public static function REDEMPTIONS(): CampaignPatchGoalMetric
    {
        if (!isset(self::$REDEMPTIONS)) {
            self::$REDEMPTIONS = new CampaignPatchGoalMetric('redemptions');
        }
        return self::$REDEMPTIONS;
    }
    public static function LEADS(): CampaignPatchGoalMetric
    {
        if (!isset(self::$LEADS)) {
            self::$LEADS = new CampaignPatchGoalMetric('leads');
        }
        return self::$LEADS;
    }
    public static function SUBSCRIPTIONS(): CampaignPatchGoalMetric
    {
        if (!isset(self::$SUBSCRIPTIONS)) {
            self::$SUBSCRIPTIONS = new CampaignPatchGoalMetric('subscriptions');
        }
        return self::$SUBSCRIPTIONS;
    }
    public static function CLICKS(): CampaignPatchGoalMetric
    {
        if (!isset(self::$CLICKS)) {
            self::$CLICKS = new CampaignPatchGoalMetric('clicks');
        }
        return self::$CLICKS;
    }
}