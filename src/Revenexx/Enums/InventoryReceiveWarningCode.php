<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoryReceiveWarningCode implements JsonSerializable
{
    private static InventoryReceiveWarningCode $LOCATIONDISABLED;

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

    public static function LOCATIONDISABLED(): InventoryReceiveWarningCode
    {
        if (!isset(self::$LOCATIONDISABLED)) {
            self::$LOCATIONDISABLED = new InventoryReceiveWarningCode('location_disabled');
        }
        return self::$LOCATIONDISABLED;
    }
}