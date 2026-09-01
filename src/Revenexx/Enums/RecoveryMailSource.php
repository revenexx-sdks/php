<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RecoveryMailSource implements JsonSerializable
{
    private static RecoveryMailSource $TENANT;
    private static RecoveryMailSource $PLATFORM;

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

    public static function TENANT(): RecoveryMailSource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new RecoveryMailSource('tenant');
        }
        return self::$TENANT;
    }
    public static function PLATFORM(): RecoveryMailSource
    {
        if (!isset(self::$PLATFORM)) {
            self::$PLATFORM = new RecoveryMailSource('platform');
        }
        return self::$PLATFORM;
    }
}