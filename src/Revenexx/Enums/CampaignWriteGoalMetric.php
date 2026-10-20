<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignWriteGoalMetric implements JsonSerializable
{
    private static CampaignWriteGoalMetric $REVENUE;
    private static CampaignWriteGoalMetric $ORDERS;
    private static CampaignWriteGoalMetric $REDEMPTIONS;
    private static CampaignWriteGoalMetric $LEADS;
    private static CampaignWriteGoalMetric $SUBSCRIPTIONS;
    private static CampaignWriteGoalMetric $CLICKS;

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

    public static function REVENUE(): CampaignWriteGoalMetric
    {
        if (!isset(self::$REVENUE)) {
            self::$REVENUE = new CampaignWriteGoalMetric('revenue');
        }
        return self::$REVENUE;
    }
    public static function ORDERS(): CampaignWriteGoalMetric
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new CampaignWriteGoalMetric('orders');
        }
        return self::$ORDERS;
    }
    public static function REDEMPTIONS(): CampaignWriteGoalMetric
    {
        if (!isset(self::$REDEMPTIONS)) {
            self::$REDEMPTIONS = new CampaignWriteGoalMetric('redemptions');
        }
        return self::$REDEMPTIONS;
    }
    public static function LEADS(): CampaignWriteGoalMetric
    {
        if (!isset(self::$LEADS)) {
            self::$LEADS = new CampaignWriteGoalMetric('leads');
        }
        return self::$LEADS;
    }
    public static function SUBSCRIPTIONS(): CampaignWriteGoalMetric
    {
        if (!isset(self::$SUBSCRIPTIONS)) {
            self::$SUBSCRIPTIONS = new CampaignWriteGoalMetric('subscriptions');
        }
        return self::$SUBSCRIPTIONS;
    }
    public static function CLICKS(): CampaignWriteGoalMetric
    {
        if (!isset(self::$CLICKS)) {
            self::$CLICKS = new CampaignWriteGoalMetric('clicks');
        }
        return self::$CLICKS;
    }
}