<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AuthMailSource implements JsonSerializable
{
    private static AuthMailSource $TENANT;
    private static AuthMailSource $PLATFORM;

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

    public static function TENANT(): AuthMailSource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new AuthMailSource('tenant');
        }
        return self::$TENANT;
    }
    public static function PLATFORM(): AuthMailSource
    {
        if (!isset(self::$PLATFORM)) {
            self::$PLATFORM = new AuthMailSource('platform');
        }
        return self::$PLATFORM;
    }
}