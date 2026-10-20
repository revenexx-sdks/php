<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductCopyRequestParts implements JsonSerializable
{
    private static ProductCopyRequestParts $ATTRIBUTES;
    private static ProductCopyRequestParts $VARIANTS;
    private static ProductCopyRequestParts $IMAGES;
    private static ProductCopyRequestParts $CATEGORIES;

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

    public static function ATTRIBUTES(): ProductCopyRequestParts
    {
        if (!isset(self::$ATTRIBUTES)) {
            self::$ATTRIBUTES = new ProductCopyRequestParts('attributes');
        }
        return self::$ATTRIBUTES;
    }
    public static function VARIANTS(): ProductCopyRequestParts
    {
        if (!isset(self::$VARIANTS)) {
            self::$VARIANTS = new ProductCopyRequestParts('variants');
        }
        return self::$VARIANTS;
    }
    public static function IMAGES(): ProductCopyRequestParts
    {
        if (!isset(self::$IMAGES)) {
            self::$IMAGES = new ProductCopyRequestParts('images');
        }
        return self::$IMAGES;
    }
    public static function CATEGORIES(): ProductCopyRequestParts
    {
        if (!isset(self::$CATEGORIES)) {
            self::$CATEGORIES = new ProductCopyRequestParts('categories');
        }
        return self::$CATEGORIES;
    }
}