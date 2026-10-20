<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CopyQuoteRequestParts implements JsonSerializable
{
    private static CopyQuoteRequestParts $ITEMS;

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

    public static function ITEMS(): CopyQuoteRequestParts
    {
        if (!isset(self::$ITEMS)) {
            self::$ITEMS = new CopyQuoteRequestParts('items');
        }
        return self::$ITEMS;
    }
}