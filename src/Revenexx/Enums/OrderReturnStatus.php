<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderReturnStatus implements JsonSerializable
{
    private static OrderReturnStatus $REGISTERED;
    private static OrderReturnStatus $RECEIVED;
    private static OrderReturnStatus $COMPLETED;
    private static OrderReturnStatus $REJECTED;

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

    public static function REGISTERED(): OrderReturnStatus
    {
        if (!isset(self::$REGISTERED)) {
            self::$REGISTERED = new OrderReturnStatus('registered');
        }
        return self::$REGISTERED;
    }
    public static function RECEIVED(): OrderReturnStatus
    {
        if (!isset(self::$RECEIVED)) {
            self::$RECEIVED = new OrderReturnStatus('received');
        }
        return self::$RECEIVED;
    }
    public static function COMPLETED(): OrderReturnStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new OrderReturnStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function REJECTED(): OrderReturnStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new OrderReturnStatus('rejected');
        }
        return self::$REJECTED;
    }
}