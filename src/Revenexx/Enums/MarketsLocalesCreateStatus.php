<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketsLocalesCreateStatus implements JsonSerializable
{
    private static MarketsLocalesCreateStatus $PREPARING;
    private static MarketsLocalesCreateStatus $ACTIVE;

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

    public static function PREPARING(): MarketsLocalesCreateStatus
    {
        if (!isset(self::$PREPARING)) {
            self::$PREPARING = new MarketsLocalesCreateStatus('preparing');
        }
        return self::$PREPARING;
    }
    public static function ACTIVE(): MarketsLocalesCreateStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new MarketsLocalesCreateStatus('active');
        }
        return self::$ACTIVE;
    }
}