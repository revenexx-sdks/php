<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SeedResultMode implements JsonSerializable
{
    private static SeedResultMode $FILL;
    private static SeedResultMode $RESET;

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

    public static function FILL(): SeedResultMode
    {
        if (!isset(self::$FILL)) {
            self::$FILL = new SeedResultMode('fill');
        }
        return self::$FILL;
    }
    public static function RESET(): SeedResultMode
    {
        if (!isset(self::$RESET)) {
            self::$RESET = new SeedResultMode('reset');
        }
        return self::$RESET;
    }
}