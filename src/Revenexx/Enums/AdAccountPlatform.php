<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AdAccountPlatform implements JsonSerializable
{
    private static AdAccountPlatform $META;
    private static AdAccountPlatform $GOOGLEADS;
    private static AdAccountPlatform $LINKEDIN;

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

    public static function META(): AdAccountPlatform
    {
        if (!isset(self::$META)) {
            self::$META = new AdAccountPlatform('meta');
        }
        return self::$META;
    }
    public static function GOOGLEADS(): AdAccountPlatform
    {
        if (!isset(self::$GOOGLEADS)) {
            self::$GOOGLEADS = new AdAccountPlatform('google_ads');
        }
        return self::$GOOGLEADS;
    }
    public static function LINKEDIN(): AdAccountPlatform
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new AdAccountPlatform('linkedin');
        }
        return self::$LINKEDIN;
    }
}