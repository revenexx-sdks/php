<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AdAccountWritePlatform implements JsonSerializable
{
    private static AdAccountWritePlatform $META;
    private static AdAccountWritePlatform $GOOGLEADS;
    private static AdAccountWritePlatform $LINKEDIN;

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

    public static function META(): AdAccountWritePlatform
    {
        if (!isset(self::$META)) {
            self::$META = new AdAccountWritePlatform('meta');
        }
        return self::$META;
    }
    public static function GOOGLEADS(): AdAccountWritePlatform
    {
        if (!isset(self::$GOOGLEADS)) {
            self::$GOOGLEADS = new AdAccountWritePlatform('google_ads');
        }
        return self::$GOOGLEADS;
    }
    public static function LINKEDIN(): AdAccountWritePlatform
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new AdAccountWritePlatform('linkedin');
        }
        return self::$LINKEDIN;
    }
}