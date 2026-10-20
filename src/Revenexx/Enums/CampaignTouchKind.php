<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignTouchKind implements JsonSerializable
{
    private static CampaignTouchKind $ONSITEIMPRESSION;
    private static CampaignTouchKind $ONSITECLICK;
    private static CampaignTouchKind $ADCLICK;
    private static CampaignTouchKind $MESSAGECLICK;
    private static CampaignTouchKind $MESSAGEOPEN;
    private static CampaignTouchKind $REDEMPTION;
    private static CampaignTouchKind $SUBSCRIPTION;
    private static CampaignTouchKind $LEAD;

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

    public static function ONSITEIMPRESSION(): CampaignTouchKind
    {
        if (!isset(self::$ONSITEIMPRESSION)) {
            self::$ONSITEIMPRESSION = new CampaignTouchKind('onsite_impression');
        }
        return self::$ONSITEIMPRESSION;
    }
    public static function ONSITECLICK(): CampaignTouchKind
    {
        if (!isset(self::$ONSITECLICK)) {
            self::$ONSITECLICK = new CampaignTouchKind('onsite_click');
        }
        return self::$ONSITECLICK;
    }
    public static function ADCLICK(): CampaignTouchKind
    {
        if (!isset(self::$ADCLICK)) {
            self::$ADCLICK = new CampaignTouchKind('ad_click');
        }
        return self::$ADCLICK;
    }
    public static function MESSAGECLICK(): CampaignTouchKind
    {
        if (!isset(self::$MESSAGECLICK)) {
            self::$MESSAGECLICK = new CampaignTouchKind('message_click');
        }
        return self::$MESSAGECLICK;
    }
    public static function MESSAGEOPEN(): CampaignTouchKind
    {
        if (!isset(self::$MESSAGEOPEN)) {
            self::$MESSAGEOPEN = new CampaignTouchKind('message_open');
        }
        return self::$MESSAGEOPEN;
    }
    public static function REDEMPTION(): CampaignTouchKind
    {
        if (!isset(self::$REDEMPTION)) {
            self::$REDEMPTION = new CampaignTouchKind('redemption');
        }
        return self::$REDEMPTION;
    }
    public static function SUBSCRIPTION(): CampaignTouchKind
    {
        if (!isset(self::$SUBSCRIPTION)) {
            self::$SUBSCRIPTION = new CampaignTouchKind('subscription');
        }
        return self::$SUBSCRIPTION;
    }
    public static function LEAD(): CampaignTouchKind
    {
        if (!isset(self::$LEAD)) {
            self::$LEAD = new CampaignTouchKind('lead');
        }
        return self::$LEAD;
    }
}