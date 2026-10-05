<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentRecordSurface implements JsonSerializable
{
    private static ConsentRecordSurface $FIRSTLAYER;
    private static ConsentRecordSurface $PREFERENCES;
    private static ConsentRecordSurface $PRIVACYLINK;
    private static ConsentRecordSurface $CONTENTGATE;

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

    public static function FIRSTLAYER(): ConsentRecordSurface
    {
        if (!isset(self::$FIRSTLAYER)) {
            self::$FIRSTLAYER = new ConsentRecordSurface('first_layer');
        }
        return self::$FIRSTLAYER;
    }
    public static function PREFERENCES(): ConsentRecordSurface
    {
        if (!isset(self::$PREFERENCES)) {
            self::$PREFERENCES = new ConsentRecordSurface('preferences');
        }
        return self::$PREFERENCES;
    }
    public static function PRIVACYLINK(): ConsentRecordSurface
    {
        if (!isset(self::$PRIVACYLINK)) {
            self::$PRIVACYLINK = new ConsentRecordSurface('privacy_link');
        }
        return self::$PRIVACYLINK;
    }
    public static function CONTENTGATE(): ConsentRecordSurface
    {
        if (!isset(self::$CONTENTGATE)) {
            self::$CONTENTGATE = new ConsentRecordSurface('content_gate');
        }
        return self::$CONTENTGATE;
    }
}