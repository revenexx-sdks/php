<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketReadinessSeverity implements JsonSerializable
{
    private static MarketReadinessSeverity $BLOCKING;
    private static MarketReadinessSeverity $WARNING;
    private static MarketReadinessSeverity $INFO;

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

    public static function BLOCKING(): MarketReadinessSeverity
    {
        if (!isset(self::$BLOCKING)) {
            self::$BLOCKING = new MarketReadinessSeverity('blocking');
        }
        return self::$BLOCKING;
    }
    public static function WARNING(): MarketReadinessSeverity
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new MarketReadinessSeverity('warning');
        }
        return self::$WARNING;
    }
    public static function INFO(): MarketReadinessSeverity
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new MarketReadinessSeverity('info');
        }
        return self::$INFO;
    }
}