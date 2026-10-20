<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QueryActionTargetType implements JsonSerializable
{
    private static QueryActionTargetType $CATEGORY;
    private static QueryActionTargetType $PRODUCT;

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

    public static function CATEGORY(): QueryActionTargetType
    {
        if (!isset(self::$CATEGORY)) {
            self::$CATEGORY = new QueryActionTargetType('category');
        }
        return self::$CATEGORY;
    }
    public static function PRODUCT(): QueryActionTargetType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new QueryActionTargetType('product');
        }
        return self::$PRODUCT;
    }
}