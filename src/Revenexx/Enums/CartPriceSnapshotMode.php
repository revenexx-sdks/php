<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartPriceSnapshotMode implements JsonSerializable
{
    private static CartPriceSnapshotMode $SNAPSHOT;
    private static CartPriceSnapshotMode $LIVE;

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

    public static function SNAPSHOT(): CartPriceSnapshotMode
    {
        if (!isset(self::$SNAPSHOT)) {
            self::$SNAPSHOT = new CartPriceSnapshotMode('snapshot');
        }
        return self::$SNAPSHOT;
    }
    public static function LIVE(): CartPriceSnapshotMode
    {
        if (!isset(self::$LIVE)) {
            self::$LIVE = new CartPriceSnapshotMode('live');
        }
        return self::$LIVE;
    }
}