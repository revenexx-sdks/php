<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Destination implements JsonSerializable
{
    private static Destination $GOOGLEMERCHANTCENTER;
    private static Destination $METACATALOG;
    private static Destination $LINKEDIN;
    private static Destination $OTHER;

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

    public static function GOOGLEMERCHANTCENTER(): Destination
    {
        if (!isset(self::$GOOGLEMERCHANTCENTER)) {
            self::$GOOGLEMERCHANTCENTER = new Destination('google_merchant_center');
        }
        return self::$GOOGLEMERCHANTCENTER;
    }
    public static function METACATALOG(): Destination
    {
        if (!isset(self::$METACATALOG)) {
            self::$METACATALOG = new Destination('meta_catalog');
        }
        return self::$METACATALOG;
    }
    public static function LINKEDIN(): Destination
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new Destination('linkedin');
        }
        return self::$LINKEDIN;
    }
    public static function OTHER(): Destination
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new Destination('other');
        }
        return self::$OTHER;
    }
}