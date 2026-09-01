<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReservationStatus implements JsonSerializable
{
    private static ReservationStatus $ACTIVE;
    private static ReservationStatus $RELEASED;
    private static ReservationStatus $COMMITTED;

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

    public static function ACTIVE(): ReservationStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new ReservationStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function RELEASED(): ReservationStatus
    {
        if (!isset(self::$RELEASED)) {
            self::$RELEASED = new ReservationStatus('released');
        }
        return self::$RELEASED;
    }
    public static function COMMITTED(): ReservationStatus
    {
        if (!isset(self::$COMMITTED)) {
            self::$COMMITTED = new ReservationStatus('committed');
        }
        return self::$COMMITTED;
    }
}