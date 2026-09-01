<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoriesReservationsListStatus implements JsonSerializable
{
    private static InventoriesReservationsListStatus $ACTIVE;
    private static InventoriesReservationsListStatus $RELEASED;
    private static InventoriesReservationsListStatus $COMMITTED;

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

    public static function ACTIVE(): InventoriesReservationsListStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new InventoriesReservationsListStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function RELEASED(): InventoriesReservationsListStatus
    {
        if (!isset(self::$RELEASED)) {
            self::$RELEASED = new InventoriesReservationsListStatus('released');
        }
        return self::$RELEASED;
    }
    public static function COMMITTED(): InventoriesReservationsListStatus
    {
        if (!isset(self::$COMMITTED)) {
            self::$COMMITTED = new InventoriesReservationsListStatus('committed');
        }
        return self::$COMMITTED;
    }
}