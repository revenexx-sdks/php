<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketLocaleFallback implements JsonSerializable
{
    private static MarketLocaleFallback $LANGUAGE;
    private static MarketLocaleFallback $DEFAULTLOCALE;
    private static MarketLocaleFallback $NONE;

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

    public static function LANGUAGE(): MarketLocaleFallback
    {
        if (!isset(self::$LANGUAGE)) {
            self::$LANGUAGE = new MarketLocaleFallback('language');
        }
        return self::$LANGUAGE;
    }
    public static function DEFAULTLOCALE(): MarketLocaleFallback
    {
        if (!isset(self::$DEFAULTLOCALE)) {
            self::$DEFAULTLOCALE = new MarketLocaleFallback('default_locale');
        }
        return self::$DEFAULTLOCALE;
    }
    public static function NONE(): MarketLocaleFallback
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new MarketLocaleFallback('none');
        }
        return self::$NONE;
    }
}