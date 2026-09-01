<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsAssetsListSource implements JsonSerializable
{
    private static ProductsAssetsListSource $STORAGE;
    private static ProductsAssetsListSource $EXTERNAL;

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

    public static function STORAGE(): ProductsAssetsListSource
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new ProductsAssetsListSource('storage');
        }
        return self::$STORAGE;
    }
    public static function EXTERNAL(): ProductsAssetsListSource
    {
        if (!isset(self::$EXTERNAL)) {
            self::$EXTERNAL = new ProductsAssetsListSource('external');
        }
        return self::$EXTERNAL;
    }
}