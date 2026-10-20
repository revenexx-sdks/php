<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderCancellationKind implements JsonSerializable
{
    private static OrderCancellationKind $CANCELLATION;
    private static OrderCancellationKind $REJECTION;

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

    public static function CANCELLATION(): OrderCancellationKind
    {
        if (!isset(self::$CANCELLATION)) {
            self::$CANCELLATION = new OrderCancellationKind('cancellation');
        }
        return self::$CANCELLATION;
    }
    public static function REJECTION(): OrderCancellationKind
    {
        if (!isset(self::$REJECTION)) {
            self::$REJECTION = new OrderCancellationKind('rejection');
        }
        return self::$REJECTION;
    }
}