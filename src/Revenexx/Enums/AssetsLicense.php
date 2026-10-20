<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AssetsLicense implements JsonSerializable
{
    private static AssetsLicense $OWN;
    private static AssetsLicense $LICENSED;
    private static AssetsLicense $ROYALTYFREE;
    private static AssetsLicense $RIGHTSMANAGED;
    private static AssetsLicense $MANUFACTURER;
    private static AssetsLicense $EDITORIAL;
    private static AssetsLicense $CCBY;
    private static AssetsLicense $CCBYSA;
    private static AssetsLicense $CC0;

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

    public static function OWN(): AssetsLicense
    {
        if (!isset(self::$OWN)) {
            self::$OWN = new AssetsLicense('own');
        }
        return self::$OWN;
    }
    public static function LICENSED(): AssetsLicense
    {
        if (!isset(self::$LICENSED)) {
            self::$LICENSED = new AssetsLicense('licensed');
        }
        return self::$LICENSED;
    }
    public static function ROYALTYFREE(): AssetsLicense
    {
        if (!isset(self::$ROYALTYFREE)) {
            self::$ROYALTYFREE = new AssetsLicense('royalty_free');
        }
        return self::$ROYALTYFREE;
    }
    public static function RIGHTSMANAGED(): AssetsLicense
    {
        if (!isset(self::$RIGHTSMANAGED)) {
            self::$RIGHTSMANAGED = new AssetsLicense('rights_managed');
        }
        return self::$RIGHTSMANAGED;
    }
    public static function MANUFACTURER(): AssetsLicense
    {
        if (!isset(self::$MANUFACTURER)) {
            self::$MANUFACTURER = new AssetsLicense('manufacturer');
        }
        return self::$MANUFACTURER;
    }
    public static function EDITORIAL(): AssetsLicense
    {
        if (!isset(self::$EDITORIAL)) {
            self::$EDITORIAL = new AssetsLicense('editorial');
        }
        return self::$EDITORIAL;
    }
    public static function CCBY(): AssetsLicense
    {
        if (!isset(self::$CCBY)) {
            self::$CCBY = new AssetsLicense('cc_by');
        }
        return self::$CCBY;
    }
    public static function CCBYSA(): AssetsLicense
    {
        if (!isset(self::$CCBYSA)) {
            self::$CCBYSA = new AssetsLicense('cc_by_sa');
        }
        return self::$CCBYSA;
    }
    public static function CC0(): AssetsLicense
    {
        if (!isset(self::$CC0)) {
            self::$CC0 = new AssetsLicense('cc0');
        }
        return self::$CC0;
    }
}