<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagesSeedMode implements JsonSerializable
{
    private static PagesSeedMode $FILL;
    private static PagesSeedMode $RESET;

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

    public static function FILL(): PagesSeedMode
    {
        if (!isset(self::$FILL)) {
            self::$FILL = new PagesSeedMode('fill');
        }
        return self::$FILL;
    }
    public static function RESET(): PagesSeedMode
    {
        if (!isset(self::$RESET)) {
            self::$RESET = new PagesSeedMode('reset');
        }
        return self::$RESET;
    }
}