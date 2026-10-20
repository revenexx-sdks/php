<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketLocaleCreateRequestStatus implements JsonSerializable
{
    private static MarketLocaleCreateRequestStatus $PREPARING;
    private static MarketLocaleCreateRequestStatus $ACTIVE;

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

    public static function PREPARING(): MarketLocaleCreateRequestStatus
    {
        if (!isset(self::$PREPARING)) {
            self::$PREPARING = new MarketLocaleCreateRequestStatus('preparing');
        }
        return self::$PREPARING;
    }
    public static function ACTIVE(): MarketLocaleCreateRequestStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new MarketLocaleCreateRequestStatus('active');
        }
        return self::$ACTIVE;
    }
}