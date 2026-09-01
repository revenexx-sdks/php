<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductGridColumnSource implements JsonSerializable
{
    private static ProductGridColumnSource $COLUMN;
    private static ProductGridColumnSource $ATTRIBUTE;
    private static ProductGridColumnSource $RESOLVED;

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

    public static function COLUMN(): ProductGridColumnSource
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new ProductGridColumnSource('column');
        }
        return self::$COLUMN;
    }
    public static function ATTRIBUTE(): ProductGridColumnSource
    {
        if (!isset(self::$ATTRIBUTE)) {
            self::$ATTRIBUTE = new ProductGridColumnSource('attribute');
        }
        return self::$ATTRIBUTE;
    }
    public static function RESOLVED(): ProductGridColumnSource
    {
        if (!isset(self::$RESOLVED)) {
            self::$RESOLVED = new ProductGridColumnSource('resolved');
        }
        return self::$RESOLVED;
    }
}