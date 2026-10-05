<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Surface implements JsonSerializable
{
    private static Surface $FIRSTLAYER;
    private static Surface $PREFERENCES;
    private static Surface $PRIVACYLINK;
    private static Surface $CONTENTGATE;

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

    public static function FIRSTLAYER(): Surface
    {
        if (!isset(self::$FIRSTLAYER)) {
            self::$FIRSTLAYER = new Surface('first_layer');
        }
        return self::$FIRSTLAYER;
    }
    public static function PREFERENCES(): Surface
    {
        if (!isset(self::$PREFERENCES)) {
            self::$PREFERENCES = new Surface('preferences');
        }
        return self::$PREFERENCES;
    }
    public static function PRIVACYLINK(): Surface
    {
        if (!isset(self::$PRIVACYLINK)) {
            self::$PRIVACYLINK = new Surface('privacy_link');
        }
        return self::$PRIVACYLINK;
    }
    public static function CONTENTGATE(): Surface
    {
        if (!isset(self::$CONTENTGATE)) {
            self::$CONTENTGATE = new Surface('content_gate');
        }
        return self::$CONTENTGATE;
    }
}