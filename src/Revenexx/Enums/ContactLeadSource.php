<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLeadSource implements JsonSerializable
{
    private static ContactLeadSource $FORM;
    private static ContactLeadSource $CAMPAIGN;
    private static ContactLeadSource $IMPORT;
    private static ContactLeadSource $TRADEFAIR;
    private static ContactLeadSource $NEWSLETTER;
    private static ContactLeadSource $REFERRAL;
    private static ContactLeadSource $MANUAL;

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

    public static function FORM(): ContactLeadSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new ContactLeadSource('form');
        }
        return self::$FORM;
    }
    public static function CAMPAIGN(): ContactLeadSource
    {
        if (!isset(self::$CAMPAIGN)) {
            self::$CAMPAIGN = new ContactLeadSource('campaign');
        }
        return self::$CAMPAIGN;
    }
    public static function IMPORT(): ContactLeadSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new ContactLeadSource('import');
        }
        return self::$IMPORT;
    }
    public static function TRADEFAIR(): ContactLeadSource
    {
        if (!isset(self::$TRADEFAIR)) {
            self::$TRADEFAIR = new ContactLeadSource('trade_fair');
        }
        return self::$TRADEFAIR;
    }
    public static function NEWSLETTER(): ContactLeadSource
    {
        if (!isset(self::$NEWSLETTER)) {
            self::$NEWSLETTER = new ContactLeadSource('newsletter');
        }
        return self::$NEWSLETTER;
    }
    public static function REFERRAL(): ContactLeadSource
    {
        if (!isset(self::$REFERRAL)) {
            self::$REFERRAL = new ContactLeadSource('referral');
        }
        return self::$REFERRAL;
    }
    public static function MANUAL(): ContactLeadSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new ContactLeadSource('manual');
        }
        return self::$MANUAL;
    }
}