<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributionFactTouchKind implements JsonSerializable
{
    private static AttributionFactTouchKind $MESSAGECLICK;
    private static AttributionFactTouchKind $MESSAGEOPEN;
    private static AttributionFactTouchKind $UTM;
    private static AttributionFactTouchKind $CAMPAIGNREF;
    private static AttributionFactTouchKind $REDEMPTION;
    private static AttributionFactTouchKind $ONSITE;
    private static AttributionFactTouchKind $ADCLICK;

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

    public static function MESSAGECLICK(): AttributionFactTouchKind
    {
        if (!isset(self::$MESSAGECLICK)) {
            self::$MESSAGECLICK = new AttributionFactTouchKind('message_click');
        }
        return self::$MESSAGECLICK;
    }
    public static function MESSAGEOPEN(): AttributionFactTouchKind
    {
        if (!isset(self::$MESSAGEOPEN)) {
            self::$MESSAGEOPEN = new AttributionFactTouchKind('message_open');
        }
        return self::$MESSAGEOPEN;
    }
    public static function UTM(): AttributionFactTouchKind
    {
        if (!isset(self::$UTM)) {
            self::$UTM = new AttributionFactTouchKind('utm');
        }
        return self::$UTM;
    }
    public static function CAMPAIGNREF(): AttributionFactTouchKind
    {
        if (!isset(self::$CAMPAIGNREF)) {
            self::$CAMPAIGNREF = new AttributionFactTouchKind('campaign_ref');
        }
        return self::$CAMPAIGNREF;
    }
    public static function REDEMPTION(): AttributionFactTouchKind
    {
        if (!isset(self::$REDEMPTION)) {
            self::$REDEMPTION = new AttributionFactTouchKind('redemption');
        }
        return self::$REDEMPTION;
    }
    public static function ONSITE(): AttributionFactTouchKind
    {
        if (!isset(self::$ONSITE)) {
            self::$ONSITE = new AttributionFactTouchKind('onsite');
        }
        return self::$ONSITE;
    }
    public static function ADCLICK(): AttributionFactTouchKind
    {
        if (!isset(self::$ADCLICK)) {
            self::$ADCLICK = new AttributionFactTouchKind('ad_click');
        }
        return self::$ADCLICK;
    }
}