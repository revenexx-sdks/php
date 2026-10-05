<?php

namespace Revenexx\Enums;

use JsonSerializable;

class GoogleSignals implements JsonSerializable
{
    private static GoogleSignals $ADSTORAGE;
    private static GoogleSignals $ADUSERDATA;
    private static GoogleSignals $ADPERSONALIZATION;
    private static GoogleSignals $ANALYTICSSTORAGE;
    private static GoogleSignals $FUNCTIONALITYSTORAGE;
    private static GoogleSignals $PERSONALIZATIONSTORAGE;
    private static GoogleSignals $SECURITYSTORAGE;

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

    public static function ADSTORAGE(): GoogleSignals
    {
        if (!isset(self::$ADSTORAGE)) {
            self::$ADSTORAGE = new GoogleSignals('ad_storage');
        }
        return self::$ADSTORAGE;
    }
    public static function ADUSERDATA(): GoogleSignals
    {
        if (!isset(self::$ADUSERDATA)) {
            self::$ADUSERDATA = new GoogleSignals('ad_user_data');
        }
        return self::$ADUSERDATA;
    }
    public static function ADPERSONALIZATION(): GoogleSignals
    {
        if (!isset(self::$ADPERSONALIZATION)) {
            self::$ADPERSONALIZATION = new GoogleSignals('ad_personalization');
        }
        return self::$ADPERSONALIZATION;
    }
    public static function ANALYTICSSTORAGE(): GoogleSignals
    {
        if (!isset(self::$ANALYTICSSTORAGE)) {
            self::$ANALYTICSSTORAGE = new GoogleSignals('analytics_storage');
        }
        return self::$ANALYTICSSTORAGE;
    }
    public static function FUNCTIONALITYSTORAGE(): GoogleSignals
    {
        if (!isset(self::$FUNCTIONALITYSTORAGE)) {
            self::$FUNCTIONALITYSTORAGE = new GoogleSignals('functionality_storage');
        }
        return self::$FUNCTIONALITYSTORAGE;
    }
    public static function PERSONALIZATIONSTORAGE(): GoogleSignals
    {
        if (!isset(self::$PERSONALIZATIONSTORAGE)) {
            self::$PERSONALIZATIONSTORAGE = new GoogleSignals('personalization_storage');
        }
        return self::$PERSONALIZATIONSTORAGE;
    }
    public static function SECURITYSTORAGE(): GoogleSignals
    {
        if (!isset(self::$SECURITYSTORAGE)) {
            self::$SECURITYSTORAGE = new GoogleSignals('security_storage');
        }
        return self::$SECURITYSTORAGE;
    }
}