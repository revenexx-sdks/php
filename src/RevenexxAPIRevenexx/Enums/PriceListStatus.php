<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class PriceListStatus implements JsonSerializable
{
    private static PriceListStatus $ACTIVE;
    private static PriceListStatus $INACTIVE;

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

    public static function ACTIVE(): PriceListStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new PriceListStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function INACTIVE(): PriceListStatus
    {
        if (!isset(self::$INACTIVE)) {
            self::$INACTIVE = new PriceListStatus('inactive');
        }
        return self::$INACTIVE;
    }
}