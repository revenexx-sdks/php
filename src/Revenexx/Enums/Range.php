<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Range implements JsonSerializable
{
    private static Range $_24H;
    private static Range $_30D;
    private static Range $_90D;

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

    public static function _24H(): Range
    {
        if (!isset(self::$_24H)) {
            self::$_24H = new Range('24h');
        }
        return self::$_24H;
    }
    public static function _30D(): Range
    {
        if (!isset(self::$_30D)) {
            self::$_30D = new Range('30d');
        }
        return self::$_30D;
    }
    public static function _90D(): Range
    {
        if (!isset(self::$_90D)) {
            self::$_90D = new Range('90d');
        }
        return self::$_90D;
    }
}