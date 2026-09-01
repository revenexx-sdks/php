<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderReturnRefusal implements JsonSerializable
{
    private static OrderReturnRefusal $WEARANDTEAR;
    private static OrderReturnRefusal $NOTRETURNABLE;

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

    public static function WEARANDTEAR(): OrderReturnRefusal
    {
        if (!isset(self::$WEARANDTEAR)) {
            self::$WEARANDTEAR = new OrderReturnRefusal('wear_and_tear');
        }
        return self::$WEARANDTEAR;
    }
    public static function NOTRETURNABLE(): OrderReturnRefusal
    {
        if (!isset(self::$NOTRETURNABLE)) {
            self::$NOTRETURNABLE = new OrderReturnRefusal('not_returnable');
        }
        return self::$NOTRETURNABLE;
    }
}