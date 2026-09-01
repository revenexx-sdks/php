<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductCategoriesSource implements JsonSerializable
{
    private static ProductCategoriesSource $MANUAL;
    private static ProductCategoriesSource $RULE;

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

    public static function MANUAL(): ProductCategoriesSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new ProductCategoriesSource('manual');
        }
        return self::$MANUAL;
    }
    public static function RULE(): ProductCategoriesSource
    {
        if (!isset(self::$RULE)) {
            self::$RULE = new ProductCategoriesSource('rule');
        }
        return self::$RULE;
    }
}