<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceListDeleteStatus implements JsonSerializable
{
    private static PriceListDeleteStatus $TRASHED;
    private static PriceListDeleteStatus $DELETED;

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

    public static function TRASHED(): PriceListDeleteStatus
    {
        if (!isset(self::$TRASHED)) {
            self::$TRASHED = new PriceListDeleteStatus('trashed');
        }
        return self::$TRASHED;
    }
    public static function DELETED(): PriceListDeleteStatus
    {
        if (!isset(self::$DELETED)) {
            self::$DELETED = new PriceListDeleteStatus('deleted');
        }
        return self::$DELETED;
    }
}