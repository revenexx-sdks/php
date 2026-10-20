<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsCopyParts implements JsonSerializable
{
    private static ProductsCopyParts $ATTRIBUTES;
    private static ProductsCopyParts $VARIANTS;
    private static ProductsCopyParts $IMAGES;
    private static ProductsCopyParts $CATEGORIES;

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

    public static function ATTRIBUTES(): ProductsCopyParts
    {
        if (!isset(self::$ATTRIBUTES)) {
            self::$ATTRIBUTES = new ProductsCopyParts('attributes');
        }
        return self::$ATTRIBUTES;
    }
    public static function VARIANTS(): ProductsCopyParts
    {
        if (!isset(self::$VARIANTS)) {
            self::$VARIANTS = new ProductsCopyParts('variants');
        }
        return self::$VARIANTS;
    }
    public static function IMAGES(): ProductsCopyParts
    {
        if (!isset(self::$IMAGES)) {
            self::$IMAGES = new ProductsCopyParts('images');
        }
        return self::$IMAGES;
    }
    public static function CATEGORIES(): ProductsCopyParts
    {
        if (!isset(self::$CATEGORIES)) {
            self::$CATEGORIES = new ProductsCopyParts('categories');
        }
        return self::$CATEGORIES;
    }
}