<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketsListStatus implements JsonSerializable
{
    private static MarketsListStatus $ACTIVE;
    private static MarketsListStatus $INACTIVE;

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

    public static function ACTIVE(): MarketsListStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new MarketsListStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function INACTIVE(): MarketsListStatus
    {
        if (!isset(self::$INACTIVE)) {
            self::$INACTIVE = new MarketsListStatus('inactive');
        }
        return self::$INACTIVE;
    }
}