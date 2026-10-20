<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Collection implements JsonSerializable
{
    private static Collection $CATEGORIES;
    private static Collection $MANUFACTURERS;
    private static Collection $PAGES;
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

    public static function CATEGORIES(): Collection
    {
        if (!isset(self::$CATEGORIES)) {
            self::$CATEGORIES = new Collection('categories');
        }
        return self::$CATEGORIES;
    }
    public static function MANUFACTURERS(): Collection
    {
        if (!isset(self::$MANUFACTURERS)) {
            self::$MANUFACTURERS = new Collection('manufacturers');
        }
        return self::$MANUFACTURERS;
    }
    public static function PAGES(): Collection
    {
        if (!isset(self::$PAGES)) {
            self::$PAGES = new Collection('pages');
        }
        return self::$PAGES;
    }
    public static function PRODUCTS(): Collection
    {
        if (!isset(self::$PRODUCTS)) {
            self::$PRODUCTS = new Collection('products');
        }
        return self::$PRODUCTS;
    }
}