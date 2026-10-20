<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionPlatform implements JsonSerializable
{
    private static ConversionPlatform $META;
    private static ConversionPlatform $GOOGLEADS;
    private static ConversionPlatform $LINKEDIN;

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

    public static function META(): ConversionPlatform
    {
        if (!isset(self::$META)) {
            self::$META = new ConversionPlatform('meta');
        }
        return self::$META;
    }
    public static function GOOGLEADS(): ConversionPlatform
    {
        if (!isset(self::$GOOGLEADS)) {
            self::$GOOGLEADS = new ConversionPlatform('google_ads');
        }
        return self::$GOOGLEADS;
    }
    public static function LINKEDIN(): ConversionPlatform
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new ConversionPlatform('linkedin');
        }
        return self::$LINKEDIN;
    }
}