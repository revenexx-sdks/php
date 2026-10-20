<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceCheckRequestLang implements JsonSerializable
{
    private static PriceCheckRequestLang $DE;
    private static PriceCheckRequestLang $EN;

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

    public static function DE(): PriceCheckRequestLang
    {
        if (!isset(self::$DE)) {
            self::$DE = new PriceCheckRequestLang('de');
        }
        return self::$DE;
    }
    public static function EN(): PriceCheckRequestLang
    {
        if (!isset(self::$EN)) {
            self::$EN = new PriceCheckRequestLang('en');
        }
        return self::$EN;
    }
}