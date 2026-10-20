<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Device implements JsonSerializable
{
    private static Device $DESKTOP;
    private static Device $MOBILE;

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

    public static function DESKTOP(): Device
    {
        if (!isset(self::$DESKTOP)) {
            self::$DESKTOP = new Device('desktop');
        }
        return self::$DESKTOP;
    }
    public static function MOBILE(): Device
    {
        if (!isset(self::$MOBILE)) {
            self::$MOBILE = new Device('mobile');
        }
        return self::$MOBILE;
    }
}