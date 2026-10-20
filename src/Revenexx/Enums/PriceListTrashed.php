<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceListTrashed implements JsonSerializable
{
    private static PriceListTrashed $EXCLUDE;
    private static PriceListTrashed $ONLY;
    private static PriceListTrashed $INCLUDE;

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

    public static function EXCLUDE(): PriceListTrashed
    {
        if (!isset(self::$EXCLUDE)) {
            self::$EXCLUDE = new PriceListTrashed('exclude');
        }
        return self::$EXCLUDE;
    }
    public static function ONLY(): PriceListTrashed
    {
        if (!isset(self::$ONLY)) {
            self::$ONLY = new PriceListTrashed('only');
        }
        return self::$ONLY;
    }
    public static function INCLUDE(): PriceListTrashed
    {
        if (!isset(self::$INCLUDE)) {
            self::$INCLUDE = new PriceListTrashed('include');
        }
        return self::$INCLUDE;
    }
}