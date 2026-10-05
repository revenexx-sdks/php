<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SeedRequestMode implements JsonSerializable
{
    private static SeedRequestMode $FILL;
    private static SeedRequestMode $RESET;

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

    public static function FILL(): SeedRequestMode
    {
        if (!isset(self::$FILL)) {
            self::$FILL = new SeedRequestMode('fill');
        }
        return self::$FILL;
    }
    public static function RESET(): SeedRequestMode
    {
        if (!isset(self::$RESET)) {
            self::$RESET = new SeedRequestMode('reset');
        }
        return self::$RESET;
    }
}