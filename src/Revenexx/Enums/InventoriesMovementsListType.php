<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoriesMovementsListType implements JsonSerializable
{
    private static InventoriesMovementsListType $INBOUND;
    private static InventoriesMovementsListType $ADJUSTMENT;
    private static InventoriesMovementsListType $RESERVE;
    private static InventoriesMovementsListType $RELEASE;
    private static InventoriesMovementsListType $SHIPMENT;
    private static InventoriesMovementsListType $RESTOCK;

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

    public static function INBOUND(): InventoriesMovementsListType
    {
        if (!isset(self::$INBOUND)) {
            self::$INBOUND = new InventoriesMovementsListType('inbound');
        }
        return self::$INBOUND;
    }
    public static function ADJUSTMENT(): InventoriesMovementsListType
    {
        if (!isset(self::$ADJUSTMENT)) {
            self::$ADJUSTMENT = new InventoriesMovementsListType('adjustment');
        }
        return self::$ADJUSTMENT;
    }
    public static function RESERVE(): InventoriesMovementsListType
    {
        if (!isset(self::$RESERVE)) {
            self::$RESERVE = new InventoriesMovementsListType('reserve');
        }
        return self::$RESERVE;
    }
    public static function RELEASE(): InventoriesMovementsListType
    {
        if (!isset(self::$RELEASE)) {
            self::$RELEASE = new InventoriesMovementsListType('release');
        }
        return self::$RELEASE;
    }
    public static function SHIPMENT(): InventoriesMovementsListType
    {
        if (!isset(self::$SHIPMENT)) {
            self::$SHIPMENT = new InventoriesMovementsListType('shipment');
        }
        return self::$SHIPMENT;
    }
    public static function RESTOCK(): InventoriesMovementsListType
    {
        if (!isset(self::$RESTOCK)) {
            self::$RESTOCK = new InventoriesMovementsListType('restock');
        }
        return self::$RESTOCK;
    }
}