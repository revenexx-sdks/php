<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceEntryType implements JsonSerializable
{
    private static PriceEntryType $STANDARD;
    private static PriceEntryType $ONREQUEST;

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

    public static function STANDARD(): PriceEntryType
    {
        if (!isset(self::$STANDARD)) {
            self::$STANDARD = new PriceEntryType('standard');
        }
        return self::$STANDARD;
    }
    public static function ONREQUEST(): PriceEntryType
    {
        if (!isset(self::$ONREQUEST)) {
            self::$ONREQUEST = new PriceEntryType('on_request');
        }
        return self::$ONREQUEST;
    }
}