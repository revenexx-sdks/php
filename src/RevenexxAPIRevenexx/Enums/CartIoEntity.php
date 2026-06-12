<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class CartIoEntity implements JsonSerializable
{
    private static CartIoEntity $CARTS;
    private static CartIoEntity $CARTITEMS;

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

    public static function CARTS(): CartIoEntity
    {
        if (!isset(self::$CARTS)) {
            self::$CARTS = new CartIoEntity('carts');
        }
        return self::$CARTS;
    }
    public static function CARTITEMS(): CartIoEntity
    {
        if (!isset(self::$CARTITEMS)) {
            self::$CARTITEMS = new CartIoEntity('cart_items');
        }
        return self::$CARTITEMS;
    }
}