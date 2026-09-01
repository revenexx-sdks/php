<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsKind implements JsonSerializable
{
    private static ProductsKind $SIMPLE;
    private static ProductsKind $MODEL;
    private static ProductsKind $VARIANT;

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

    public static function SIMPLE(): ProductsKind
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new ProductsKind('simple');
        }
        return self::$SIMPLE;
    }
    public static function MODEL(): ProductsKind
    {
        if (!isset(self::$MODEL)) {
            self::$MODEL = new ProductsKind('model');
        }
        return self::$MODEL;
    }
    public static function VARIANT(): ProductsKind
    {
        if (!isset(self::$VARIANT)) {
            self::$VARIANT = new ProductsKind('variant');
        }
        return self::$VARIANT;
    }
}