<?php

namespace Revenexx\Enums;

use JsonSerializable;

class GoalMetric implements JsonSerializable
{
    private static GoalMetric $REVENUE;
    private static GoalMetric $ORDERS;
    private static GoalMetric $REDEMPTIONS;
    private static GoalMetric $LEADS;
    private static GoalMetric $SUBSCRIPTIONS;
    private static GoalMetric $CLICKS;

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

    public static function REVENUE(): GoalMetric
    {
        if (!isset(self::$REVENUE)) {
            self::$REVENUE = new GoalMetric('revenue');
        }
        return self::$REVENUE;
    }
    public static function ORDERS(): GoalMetric
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new GoalMetric('orders');
        }
        return self::$ORDERS;
    }
    public static function REDEMPTIONS(): GoalMetric
    {
        if (!isset(self::$REDEMPTIONS)) {
            self::$REDEMPTIONS = new GoalMetric('redemptions');
        }
        return self::$REDEMPTIONS;
    }
    public static function LEADS(): GoalMetric
    {
        if (!isset(self::$LEADS)) {
            self::$LEADS = new GoalMetric('leads');
        }
        return self::$LEADS;
    }
    public static function SUBSCRIPTIONS(): GoalMetric
    {
        if (!isset(self::$SUBSCRIPTIONS)) {
            self::$SUBSCRIPTIONS = new GoalMetric('subscriptions');
        }
        return self::$SUBSCRIPTIONS;
    }
    public static function CLICKS(): GoalMetric
    {
        if (!isset(self::$CLICKS)) {
            self::$CLICKS = new GoalMetric('clicks');
        }
        return self::$CLICKS;
    }
}