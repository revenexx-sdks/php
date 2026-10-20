<?php

namespace Revenexx\Enums;

use JsonSerializable;

class StockWatchState implements JsonSerializable
{
    private static StockWatchState $WAITING;
    private static StockWatchState $NOTIFIED;
    private static StockWatchState $CANCELLED;

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

    public static function WAITING(): StockWatchState
    {
        if (!isset(self::$WAITING)) {
            self::$WAITING = new StockWatchState('waiting');
        }
        return self::$WAITING;
    }
    public static function NOTIFIED(): StockWatchState
    {
        if (!isset(self::$NOTIFIED)) {
            self::$NOTIFIED = new StockWatchState('notified');
        }
        return self::$NOTIFIED;
    }
    public static function CANCELLED(): StockWatchState
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new StockWatchState('cancelled');
        }
        return self::$CANCELLED;
    }
}