<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleResultLeadSource implements JsonSerializable
{
    private static ContactLifecycleResultLeadSource $FORM;
    private static ContactLifecycleResultLeadSource $CAMPAIGN;
    private static ContactLifecycleResultLeadSource $IMPORT;
    private static ContactLifecycleResultLeadSource $TRADEFAIR;
    private static ContactLifecycleResultLeadSource $NEWSLETTER;
    private static ContactLifecycleResultLeadSource $REFERRAL;
    private static ContactLifecycleResultLeadSource $MANUAL;

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

    public static function FORM(): ContactLifecycleResultLeadSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new ContactLifecycleResultLeadSource('form');
        }
        return self::$FORM;
    }
    public static function CAMPAIGN(): ContactLifecycleResultLeadSource
    {
        if (!isset(self::$CAMPAIGN)) {
            self::$CAMPAIGN = new ContactLifecycleResultLeadSource('campaign');
        }
        return self::$CAMPAIGN;
    }
    public static function IMPORT(): ContactLifecycleResultLeadSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new ContactLifecycleResultLeadSource('import');
        }
        return self::$IMPORT;
    }
    public static function TRADEFAIR(): ContactLifecycleResultLeadSource
    {
        if (!isset(self::$TRADEFAIR)) {
            self::$TRADEFAIR = new ContactLifecycleResultLeadSource('trade_fair');
        }
        return self::$TRADEFAIR;
    }
    public static function NEWSLETTER(): ContactLifecycleResultLeadSource
    {
        if (!isset(self::$NEWSLETTER)) {
            self::$NEWSLETTER = new ContactLifecycleResultLeadSource('newsletter');
        }
        return self::$NEWSLETTER;
    }
    public static function REFERRAL(): ContactLifecycleResultLeadSource
    {
        if (!isset(self::$REFERRAL)) {
            self::$REFERRAL = new ContactLifecycleResultLeadSource('referral');
        }
        return self::$REFERRAL;
    }
    public static function MANUAL(): ContactLifecycleResultLeadSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new ContactLifecycleResultLeadSource('manual');
        }
        return self::$MANUAL;
    }
}