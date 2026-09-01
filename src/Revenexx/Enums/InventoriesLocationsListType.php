<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoriesLocationsListType implements JsonSerializable
{
    private static InventoriesLocationsListType $WAREHOUSE;
    private static InventoriesLocationsListType $STORE;
    private static InventoriesLocationsListType $DROPSHIP;
    private static InventoriesLocationsListType $VIRTUAL;

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

    public static function WAREHOUSE(): InventoriesLocationsListType
    {
        if (!isset(self::$WAREHOUSE)) {
            self::$WAREHOUSE = new InventoriesLocationsListType('warehouse');
        }
        return self::$WAREHOUSE;
    }
    public static function STORE(): InventoriesLocationsListType
    {
        if (!isset(self::$STORE)) {
            self::$STORE = new InventoriesLocationsListType('store');
        }
        return self::$STORE;
    }
    public static function DROPSHIP(): InventoriesLocationsListType
    {
        if (!isset(self::$DROPSHIP)) {
            self::$DROPSHIP = new InventoriesLocationsListType('dropship');
        }
        return self::$DROPSHIP;
    }
    public static function VIRTUAL(): InventoriesLocationsListType
    {
        if (!isset(self::$VIRTUAL)) {
            self::$VIRTUAL = new InventoriesLocationsListType('virtual');
        }
        return self::$VIRTUAL;
    }
}