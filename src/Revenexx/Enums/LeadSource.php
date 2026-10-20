<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LeadSource implements JsonSerializable
{
    private static LeadSource $FORM;
    private static LeadSource $CAMPAIGN;
    private static LeadSource $IMPORT;
    private static LeadSource $TRADEFAIR;
    private static LeadSource $NEWSLETTER;
    private static LeadSource $REFERRAL;
    private static LeadSource $MANUAL;

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

    public static function FORM(): LeadSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new LeadSource('form');
        }
        return self::$FORM;
    }
    public static function CAMPAIGN(): LeadSource
    {
        if (!isset(self::$CAMPAIGN)) {
            self::$CAMPAIGN = new LeadSource('campaign');
        }
        return self::$CAMPAIGN;
    }
    public static function IMPORT(): LeadSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new LeadSource('import');
        }
        return self::$IMPORT;
    }
    public static function TRADEFAIR(): LeadSource
    {
        if (!isset(self::$TRADEFAIR)) {
            self::$TRADEFAIR = new LeadSource('trade_fair');
        }
        return self::$TRADEFAIR;
    }
    public static function NEWSLETTER(): LeadSource
    {
        if (!isset(self::$NEWSLETTER)) {
            self::$NEWSLETTER = new LeadSource('newsletter');
        }
        return self::$NEWSLETTER;
    }
    public static function REFERRAL(): LeadSource
    {
        if (!isset(self::$REFERRAL)) {
            self::$REFERRAL = new LeadSource('referral');
        }
        return self::$REFERRAL;
    }
    public static function MANUAL(): LeadSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new LeadSource('manual');
        }
        return self::$MANUAL;
    }
}