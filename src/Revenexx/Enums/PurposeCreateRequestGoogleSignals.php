<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurposeCreateRequestGoogleSignals implements JsonSerializable
{
    private static PurposeCreateRequestGoogleSignals $ADSTORAGE;
    private static PurposeCreateRequestGoogleSignals $ADUSERDATA;
    private static PurposeCreateRequestGoogleSignals $ADPERSONALIZATION;
    private static PurposeCreateRequestGoogleSignals $ANALYTICSSTORAGE;
    private static PurposeCreateRequestGoogleSignals $FUNCTIONALITYSTORAGE;
    private static PurposeCreateRequestGoogleSignals $PERSONALIZATIONSTORAGE;
    private static PurposeCreateRequestGoogleSignals $SECURITYSTORAGE;

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

    public static function ADSTORAGE(): PurposeCreateRequestGoogleSignals
    {
        if (!isset(self::$ADSTORAGE)) {
            self::$ADSTORAGE = new PurposeCreateRequestGoogleSignals('ad_storage');
        }
        return self::$ADSTORAGE;
    }
    public static function ADUSERDATA(): PurposeCreateRequestGoogleSignals
    {
        if (!isset(self::$ADUSERDATA)) {
            self::$ADUSERDATA = new PurposeCreateRequestGoogleSignals('ad_user_data');
        }
        return self::$ADUSERDATA;
    }
    public static function ADPERSONALIZATION(): PurposeCreateRequestGoogleSignals
    {
        if (!isset(self::$ADPERSONALIZATION)) {
            self::$ADPERSONALIZATION = new PurposeCreateRequestGoogleSignals('ad_personalization');
        }
        return self::$ADPERSONALIZATION;
    }
    public static function ANALYTICSSTORAGE(): PurposeCreateRequestGoogleSignals
    {
        if (!isset(self::$ANALYTICSSTORAGE)) {
            self::$ANALYTICSSTORAGE = new PurposeCreateRequestGoogleSignals('analytics_storage');
        }
        return self::$ANALYTICSSTORAGE;
    }
    public static function FUNCTIONALITYSTORAGE(): PurposeCreateRequestGoogleSignals
    {
        if (!isset(self::$FUNCTIONALITYSTORAGE)) {
            self::$FUNCTIONALITYSTORAGE = new PurposeCreateRequestGoogleSignals('functionality_storage');
        }
        return self::$FUNCTIONALITYSTORAGE;
    }
    public static function PERSONALIZATIONSTORAGE(): PurposeCreateRequestGoogleSignals
    {
        if (!isset(self::$PERSONALIZATIONSTORAGE)) {
            self::$PERSONALIZATIONSTORAGE = new PurposeCreateRequestGoogleSignals('personalization_storage');
        }
        return self::$PERSONALIZATIONSTORAGE;
    }
    public static function SECURITYSTORAGE(): PurposeCreateRequestGoogleSignals
    {
        if (!isset(self::$SECURITYSTORAGE)) {
            self::$SECURITYSTORAGE = new PurposeCreateRequestGoogleSignals('security_storage');
        }
        return self::$SECURITYSTORAGE;
    }
}