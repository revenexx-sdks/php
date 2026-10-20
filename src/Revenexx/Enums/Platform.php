<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Platform implements JsonSerializable
{
    private static Platform $META;
    private static Platform $GOOGLEADS;
    private static Platform $LINKEDIN;

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

    public static function META(): Platform
    {
        if (!isset(self::$META)) {
            self::$META = new Platform('meta');
        }
        return self::$META;
    }
    public static function GOOGLEADS(): Platform
    {
        if (!isset(self::$GOOGLEADS)) {
            self::$GOOGLEADS = new Platform('google_ads');
        }
        return self::$GOOGLEADS;
    }
    public static function LINKEDIN(): Platform
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new Platform('linkedin');
        }
        return self::$LINKEDIN;
    }
}