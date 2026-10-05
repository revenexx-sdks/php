<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsProductCategoriesListSource implements JsonSerializable
{
    private static ProductsProductCategoriesListSource $MANUAL;
    private static ProductsProductCategoriesListSource $RULE;

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

    public static function MANUAL(): ProductsProductCategoriesListSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new ProductsProductCategoriesListSource('manual');
        }
        return self::$MANUAL;
    }
    public static function RULE(): ProductsProductCategoriesListSource
    {
        if (!isset(self::$RULE)) {
            self::$RULE = new ProductsProductCategoriesListSource('rule');
        }
        return self::$RULE;
    }
}