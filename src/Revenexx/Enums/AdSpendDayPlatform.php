<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AdSpendDayPlatform implements JsonSerializable
{
    private static AdSpendDayPlatform $META;
    private static AdSpendDayPlatform $GOOGLEADS;
    private static AdSpendDayPlatform $LINKEDIN;

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

    public static function META(): AdSpendDayPlatform
    {
        if (!isset(self::$META)) {
            self::$META = new AdSpendDayPlatform('meta');
        }
        return self::$META;
    }
    public static function GOOGLEADS(): AdSpendDayPlatform
    {
        if (!isset(self::$GOOGLEADS)) {
            self::$GOOGLEADS = new AdSpendDayPlatform('google_ads');
        }
        return self::$GOOGLEADS;
    }
    public static function LINKEDIN(): AdSpendDayPlatform
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new AdSpendDayPlatform('linkedin');
        }
        return self::$LINKEDIN;
    }
}