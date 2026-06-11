<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class Collection implements JsonSerializable
{
    private static Collection $GREETINGS;
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

    public static function GREETINGS(): Collection
    {
        if (!isset(self::$GREETINGS)) {
            self::$GREETINGS = new Collection('greetings');
        }
        return self::$GREETINGS;
    }
    public static function PRODUCTS(): Collection
    {
        if (!isset(self::$PRODUCTS)) {
            self::$PRODUCTS = new Collection('products');
        }
        return self::$PRODUCTS;
    }
}