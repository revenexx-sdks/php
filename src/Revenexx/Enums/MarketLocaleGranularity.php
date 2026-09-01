<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketLocaleGranularity implements JsonSerializable
{
    private static MarketLocaleGranularity $REGIONAL;
    private static MarketLocaleGranularity $LANGUAGE;

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

    public static function REGIONAL(): MarketLocaleGranularity
    {
        if (!isset(self::$REGIONAL)) {
            self::$REGIONAL = new MarketLocaleGranularity('regional');
        }
        return self::$REGIONAL;
    }
    public static function LANGUAGE(): MarketLocaleGranularity
    {
        if (!isset(self::$LANGUAGE)) {
            self::$LANGUAGE = new MarketLocaleGranularity('language');
        }
        return self::$LANGUAGE;
    }
}