<?php

namespace Revenexx\Enums;

use JsonSerializable;

class License implements JsonSerializable
{
    private static License $OWN;
    private static License $LICENSED;
    private static License $ROYALTYFREE;
    private static License $RIGHTSMANAGED;
    private static License $MANUFACTURER;
    private static License $EDITORIAL;
    private static License $CCBY;
    private static License $CCBYSA;
    private static License $CC0;

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

    public static function OWN(): License
    {
        if (!isset(self::$OWN)) {
            self::$OWN = new License('own');
        }
        return self::$OWN;
    }
    public static function LICENSED(): License
    {
        if (!isset(self::$LICENSED)) {
            self::$LICENSED = new License('licensed');
        }
        return self::$LICENSED;
    }
    public static function ROYALTYFREE(): License
    {
        if (!isset(self::$ROYALTYFREE)) {
            self::$ROYALTYFREE = new License('royalty_free');
        }
        return self::$ROYALTYFREE;
    }
    public static function RIGHTSMANAGED(): License
    {
        if (!isset(self::$RIGHTSMANAGED)) {
            self::$RIGHTSMANAGED = new License('rights_managed');
        }
        return self::$RIGHTSMANAGED;
    }
    public static function MANUFACTURER(): License
    {
        if (!isset(self::$MANUFACTURER)) {
            self::$MANUFACTURER = new License('manufacturer');
        }
        return self::$MANUFACTURER;
    }
    public static function EDITORIAL(): License
    {
        if (!isset(self::$EDITORIAL)) {
            self::$EDITORIAL = new License('editorial');
        }
        return self::$EDITORIAL;
    }
    public static function CCBY(): License
    {
        if (!isset(self::$CCBY)) {
            self::$CCBY = new License('cc_by');
        }
        return self::$CCBY;
    }
    public static function CCBYSA(): License
    {
        if (!isset(self::$CCBYSA)) {
            self::$CCBYSA = new License('cc_by_sa');
        }
        return self::$CCBYSA;
    }
    public static function CC0(): License
    {
        if (!isset(self::$CC0)) {
            self::$CC0 = new License('cc0');
        }
        return self::$CC0;
    }
}