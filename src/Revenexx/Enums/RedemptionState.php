<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RedemptionState implements JsonSerializable
{
    private static RedemptionState $RESERVED;
    private static RedemptionState $COMMITTED;
    private static RedemptionState $RELEASED;

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

    public static function RESERVED(): RedemptionState
    {
        if (!isset(self::$RESERVED)) {
            self::$RESERVED = new RedemptionState('reserved');
        }
        return self::$RESERVED;
    }
    public static function COMMITTED(): RedemptionState
    {
        if (!isset(self::$COMMITTED)) {
            self::$COMMITTED = new RedemptionState('committed');
        }
        return self::$COMMITTED;
    }
    public static function RELEASED(): RedemptionState
    {
        if (!isset(self::$RELEASED)) {
            self::$RELEASED = new RedemptionState('released');
        }
        return self::$RELEASED;
    }
}