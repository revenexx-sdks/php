<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsListTrashed implements JsonSerializable
{
    private static ProductsListTrashed $ONLY;
    private static ProductsListTrashed $INCLUDE;

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

    public static function ONLY(): ProductsListTrashed
    {
        if (!isset(self::$ONLY)) {
            self::$ONLY = new ProductsListTrashed('only');
        }
        return self::$ONLY;
    }
    public static function INCLUDE(): ProductsListTrashed
    {
        if (!isset(self::$INCLUDE)) {
            self::$INCLUDE = new ProductsListTrashed('include');
        }
        return self::$INCLUDE;
    }
}