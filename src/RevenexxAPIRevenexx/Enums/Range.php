<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class Range implements JsonSerializable
{
    private static Range $24H;
    private static Range $30D;
    private static Range $90D;

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

    public static function 24H(): Range
    {
        if (!isset(self::$24H)) {
            self::$24H = new Range('24h');
        }
        return self::$24H;
    }
    public static function 30D(): Range
    {
        if (!isset(self::$30D)) {
            self::$30D = new Range('30d');
        }
        return self::$30D;
    }
    public static function 90D(): Range
    {
        if (!isset(self::$90D)) {
            self::$90D = new Range('90d');
        }
        return self::$90D;
    }
}