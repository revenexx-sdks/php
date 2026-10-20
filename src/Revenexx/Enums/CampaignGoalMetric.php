<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignGoalMetric implements JsonSerializable
{
    private static CampaignGoalMetric $REVENUE;
    private static CampaignGoalMetric $ORDERS;
    private static CampaignGoalMetric $REDEMPTIONS;
    private static CampaignGoalMetric $LEADS;
    private static CampaignGoalMetric $SUBSCRIPTIONS;
    private static CampaignGoalMetric $CLICKS;

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

    public static function REVENUE(): CampaignGoalMetric
    {
        if (!isset(self::$REVENUE)) {
            self::$REVENUE = new CampaignGoalMetric('revenue');
        }
        return self::$REVENUE;
    }
    public static function ORDERS(): CampaignGoalMetric
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new CampaignGoalMetric('orders');
        }
        return self::$ORDERS;
    }
    public static function REDEMPTIONS(): CampaignGoalMetric
    {
        if (!isset(self::$REDEMPTIONS)) {
            self::$REDEMPTIONS = new CampaignGoalMetric('redemptions');
        }
        return self::$REDEMPTIONS;
    }
    public static function LEADS(): CampaignGoalMetric
    {
        if (!isset(self::$LEADS)) {
            self::$LEADS = new CampaignGoalMetric('leads');
        }
        return self::$LEADS;
    }
    public static function SUBSCRIPTIONS(): CampaignGoalMetric
    {
        if (!isset(self::$SUBSCRIPTIONS)) {
            self::$SUBSCRIPTIONS = new CampaignGoalMetric('subscriptions');
        }
        return self::$SUBSCRIPTIONS;
    }
    public static function CLICKS(): CampaignGoalMetric
    {
        if (!isset(self::$CLICKS)) {
            self::$CLICKS = new CampaignGoalMetric('clicks');
        }
        return self::$CLICKS;
    }
}