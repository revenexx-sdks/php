<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderReturnRefundMode implements JsonSerializable
{
    private static OrderReturnRefundMode $PROPORTIONAL;
    private static OrderReturnRefundMode $RECOMPUTED;

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

    public static function PROPORTIONAL(): OrderReturnRefundMode
    {
        if (!isset(self::$PROPORTIONAL)) {
            self::$PROPORTIONAL = new OrderReturnRefundMode('proportional');
        }
        return self::$PROPORTIONAL;
    }
    public static function RECOMPUTED(): OrderReturnRefundMode
    {
        if (!isset(self::$RECOMPUTED)) {
            self::$RECOMPUTED = new OrderReturnRefundMode('recomputed');
        }
        return self::$RECOMPUTED;
    }
}