<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class OrderItemType implements JsonSerializable
{
    private static OrderItemType $PRODUCT;
    private static OrderItemType $CONFIGURATION;
    private static OrderItemType $CUSTOM;

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

    public static function PRODUCT(): OrderItemType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new OrderItemType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): OrderItemType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new OrderItemType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): OrderItemType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new OrderItemType('custom');
        }
        return self::$CUSTOM;
    }
}