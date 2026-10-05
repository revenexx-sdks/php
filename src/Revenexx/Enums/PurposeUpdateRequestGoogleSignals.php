<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurposeUpdateRequestGoogleSignals implements JsonSerializable
{
    private static PurposeUpdateRequestGoogleSignals $ADSTORAGE;
    private static PurposeUpdateRequestGoogleSignals $ADUSERDATA;
    private static PurposeUpdateRequestGoogleSignals $ADPERSONALIZATION;
    private static PurposeUpdateRequestGoogleSignals $ANALYTICSSTORAGE;
    private static PurposeUpdateRequestGoogleSignals $FUNCTIONALITYSTORAGE;
    private static PurposeUpdateRequestGoogleSignals $PERSONALIZATIONSTORAGE;
    private static PurposeUpdateRequestGoogleSignals $SECURITYSTORAGE;

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

    public static function ADSTORAGE(): PurposeUpdateRequestGoogleSignals
    {
        if (!isset(self::$ADSTORAGE)) {
            self::$ADSTORAGE = new PurposeUpdateRequestGoogleSignals('ad_storage');
        }
        return self::$ADSTORAGE;
    }
    public static function ADUSERDATA(): PurposeUpdateRequestGoogleSignals
    {
        if (!isset(self::$ADUSERDATA)) {
            self::$ADUSERDATA = new PurposeUpdateRequestGoogleSignals('ad_user_data');
        }
        return self::$ADUSERDATA;
    }
    public static function ADPERSONALIZATION(): PurposeUpdateRequestGoogleSignals
    {
        if (!isset(self::$ADPERSONALIZATION)) {
            self::$ADPERSONALIZATION = new PurposeUpdateRequestGoogleSignals('ad_personalization');
        }
        return self::$ADPERSONALIZATION;
    }
    public static function ANALYTICSSTORAGE(): PurposeUpdateRequestGoogleSignals
    {
        if (!isset(self::$ANALYTICSSTORAGE)) {
            self::$ANALYTICSSTORAGE = new PurposeUpdateRequestGoogleSignals('analytics_storage');
        }
        return self::$ANALYTICSSTORAGE;
    }
    public static function FUNCTIONALITYSTORAGE(): PurposeUpdateRequestGoogleSignals
    {
        if (!isset(self::$FUNCTIONALITYSTORAGE)) {
            self::$FUNCTIONALITYSTORAGE = new PurposeUpdateRequestGoogleSignals('functionality_storage');
        }
        return self::$FUNCTIONALITYSTORAGE;
    }
    public static function PERSONALIZATIONSTORAGE(): PurposeUpdateRequestGoogleSignals
    {
        if (!isset(self::$PERSONALIZATIONSTORAGE)) {
            self::$PERSONALIZATIONSTORAGE = new PurposeUpdateRequestGoogleSignals('personalization_storage');
        }
        return self::$PERSONALIZATIONSTORAGE;
    }
    public static function SECURITYSTORAGE(): PurposeUpdateRequestGoogleSignals
    {
        if (!isset(self::$SECURITYSTORAGE)) {
            self::$SECURITYSTORAGE = new PurposeUpdateRequestGoogleSignals('security_storage');
        }
        return self::$SECURITYSTORAGE;
    }
}