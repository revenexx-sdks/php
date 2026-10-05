<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoryUnorderableReason implements JsonSerializable
{
    private static InventoryUnorderableReason $UNTRACKED;
    private static InventoryUnorderableReason $QUANTITY;
    private static InventoryUnorderableReason $STATE;

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

    public static function UNTRACKED(): InventoryUnorderableReason
    {
        if (!isset(self::$UNTRACKED)) {
            self::$UNTRACKED = new InventoryUnorderableReason('untracked');
        }
        return self::$UNTRACKED;
    }
    public static function QUANTITY(): InventoryUnorderableReason
    {
        if (!isset(self::$QUANTITY)) {
            self::$QUANTITY = new InventoryUnorderableReason('quantity');
        }
        return self::$QUANTITY;
    }
    public static function STATE(): InventoryUnorderableReason
    {
        if (!isset(self::$STATE)) {
            self::$STATE = new InventoryUnorderableReason('state');
        }
        return self::$STATE;
    }
}