<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Collection implements JsonSerializable
{
    private static Collection $PRODUCTS;

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

    public static function PRODUCTS(): Collection
    {
        if (!isset(self::$PRODUCTS)) {
            self::$PRODUCTS = new Collection('products');
        }
        return self::$PRODUCTS;
    }
}