<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LocationType implements JsonSerializable
{
    private static LocationType $WAREHOUSE;
    private static LocationType $STORE;
    private static LocationType $DROPSHIP;
    private static LocationType $VIRTUAL;

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

    public static function WAREHOUSE(): LocationType
    {
        if (!isset(self::$WAREHOUSE)) {
            self::$WAREHOUSE = new LocationType('warehouse');
        }
        return self::$WAREHOUSE;
    }
    public static function STORE(): LocationType
    {
        if (!isset(self::$STORE)) {
            self::$STORE = new LocationType('store');
        }
        return self::$STORE;
    }
    public static function DROPSHIP(): LocationType
    {
        if (!isset(self::$DROPSHIP)) {
            self::$DROPSHIP = new LocationType('dropship');
        }
        return self::$DROPSHIP;
    }
    public static function VIRTUAL(): LocationType
    {
        if (!isset(self::$VIRTUAL)) {
            self::$VIRTUAL = new LocationType('virtual');
        }
        return self::$VIRTUAL;
    }
}