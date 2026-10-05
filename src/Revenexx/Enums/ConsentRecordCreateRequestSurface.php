<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentRecordCreateRequestSurface implements JsonSerializable
{
    private static ConsentRecordCreateRequestSurface $FIRSTLAYER;
    private static ConsentRecordCreateRequestSurface $PREFERENCES;
    private static ConsentRecordCreateRequestSurface $PRIVACYLINK;
    private static ConsentRecordCreateRequestSurface $CONTENTGATE;

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

    public static function FIRSTLAYER(): ConsentRecordCreateRequestSurface
    {
        if (!isset(self::$FIRSTLAYER)) {
            self::$FIRSTLAYER = new ConsentRecordCreateRequestSurface('first_layer');
        }
        return self::$FIRSTLAYER;
    }
    public static function PREFERENCES(): ConsentRecordCreateRequestSurface
    {
        if (!isset(self::$PREFERENCES)) {
            self::$PREFERENCES = new ConsentRecordCreateRequestSurface('preferences');
        }
        return self::$PREFERENCES;
    }
    public static function PRIVACYLINK(): ConsentRecordCreateRequestSurface
    {
        if (!isset(self::$PRIVACYLINK)) {
            self::$PRIVACYLINK = new ConsentRecordCreateRequestSurface('privacy_link');
        }
        return self::$PRIVACYLINK;
    }
    public static function CONTENTGATE(): ConsentRecordCreateRequestSurface
    {
        if (!isset(self::$CONTENTGATE)) {
            self::$CONTENTGATE = new ConsentRecordCreateRequestSurface('content_gate');
        }
        return self::$CONTENTGATE;
    }
}