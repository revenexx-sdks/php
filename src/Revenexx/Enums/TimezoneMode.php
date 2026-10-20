<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TimezoneMode implements JsonSerializable
{
    private static TimezoneMode $TENANT;
    private static TimezoneMode $RECIPIENT;

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

    public static function TENANT(): TimezoneMode
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new TimezoneMode('tenant');
        }
        return self::$TENANT;
    }
    public static function RECIPIENT(): TimezoneMode
    {
        if (!isset(self::$RECIPIENT)) {
            self::$RECIPIENT = new TimezoneMode('recipient');
        }
        return self::$RECIPIENT;
    }
}