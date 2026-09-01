<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartItemType implements JsonSerializable
{
    private static CartItemType $PRODUCT;
    private static CartItemType $CONFIGURATION;
    private static CartItemType $CUSTOM;

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

    public static function PRODUCT(): CartItemType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new CartItemType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): CartItemType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new CartItemType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): CartItemType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new CartItemType('custom');
        }
        return self::$CUSTOM;
    }
}