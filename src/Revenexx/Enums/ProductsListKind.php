<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsListKind implements JsonSerializable
{
    private static ProductsListKind $SIMPLE;
    private static ProductsListKind $MODEL;
    private static ProductsListKind $VARIANT;

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

    public static function SIMPLE(): ProductsListKind
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new ProductsListKind('simple');
        }
        return self::$SIMPLE;
    }
    public static function MODEL(): ProductsListKind
    {
        if (!isset(self::$MODEL)) {
            self::$MODEL = new ProductsListKind('model');
        }
        return self::$MODEL;
    }
    public static function VARIANT(): ProductsListKind
    {
        if (!isset(self::$VARIANT)) {
            self::$VARIANT = new ProductsListKind('variant');
        }
        return self::$VARIANT;
    }
}