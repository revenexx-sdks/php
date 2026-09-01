<?php

namespace Revenexx\Enums;

use JsonSerializable;

class StockMovementType implements JsonSerializable
{
    private static StockMovementType $INBOUND;
    private static StockMovementType $ADJUSTMENT;
    private static StockMovementType $RESERVE;
    private static StockMovementType $RELEASE;
    private static StockMovementType $SHIPMENT;
    private static StockMovementType $RESTOCK;

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

    public static function INBOUND(): StockMovementType
    {
        if (!isset(self::$INBOUND)) {
            self::$INBOUND = new StockMovementType('inbound');
        }
        return self::$INBOUND;
    }
    public static function ADJUSTMENT(): StockMovementType
    {
        if (!isset(self::$ADJUSTMENT)) {
            self::$ADJUSTMENT = new StockMovementType('adjustment');
        }
        return self::$ADJUSTMENT;
    }
    public static function RESERVE(): StockMovementType
    {
        if (!isset(self::$RESERVE)) {
            self::$RESERVE = new StockMovementType('reserve');
        }
        return self::$RESERVE;
    }
    public static function RELEASE(): StockMovementType
    {
        if (!isset(self::$RELEASE)) {
            self::$RELEASE = new StockMovementType('release');
        }
        return self::$RELEASE;
    }
    public static function SHIPMENT(): StockMovementType
    {
        if (!isset(self::$SHIPMENT)) {
            self::$SHIPMENT = new StockMovementType('shipment');
        }
        return self::$SHIPMENT;
    }
    public static function RESTOCK(): StockMovementType
    {
        if (!isset(self::$RESTOCK)) {
            self::$RESTOCK = new StockMovementType('restock');
        }
        return self::$RESTOCK;
    }
}