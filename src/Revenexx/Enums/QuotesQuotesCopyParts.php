<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuotesQuotesCopyParts implements JsonSerializable
{
    private static QuotesQuotesCopyParts $ITEMS;

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

    public static function ITEMS(): QuotesQuotesCopyParts
    {
        if (!isset(self::$ITEMS)) {
            self::$ITEMS = new QuotesQuotesCopyParts('items');
        }
        return self::$ITEMS;
    }
}