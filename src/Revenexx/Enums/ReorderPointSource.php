<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReorderPointSource implements JsonSerializable
{
    private static ReorderPointSource $ROW;
    private static ReorderPointSource $DEFAULT;

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

    public static function ROW(): ReorderPointSource
    {
        if (!isset(self::$ROW)) {
            self::$ROW = new ReorderPointSource('row');
        }
        return self::$ROW;
    }
    public static function DEFAULT(): ReorderPointSource
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new ReorderPointSource('default');
        }
        return self::$DEFAULT;
    }
}