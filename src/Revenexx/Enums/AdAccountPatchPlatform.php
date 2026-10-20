<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AdAccountPatchPlatform implements JsonSerializable
{
    private static AdAccountPatchPlatform $META;
    private static AdAccountPatchPlatform $GOOGLEADS;
    private static AdAccountPatchPlatform $LINKEDIN;

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

    public static function META(): AdAccountPatchPlatform
    {
        if (!isset(self::$META)) {
            self::$META = new AdAccountPatchPlatform('meta');
        }
        return self::$META;
    }
    public static function GOOGLEADS(): AdAccountPatchPlatform
    {
        if (!isset(self::$GOOGLEADS)) {
            self::$GOOGLEADS = new AdAccountPatchPlatform('google_ads');
        }
        return self::$GOOGLEADS;
    }
    public static function LINKEDIN(): AdAccountPatchPlatform
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new AdAccountPatchPlatform('linkedin');
        }
        return self::$LINKEDIN;
    }
}