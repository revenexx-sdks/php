<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartIoFieldsEntity implements JsonSerializable
{
    private static CartIoFieldsEntity $CARTS;
    private static CartIoFieldsEntity $CARTITEMS;

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

    public static function CARTS(): CartIoFieldsEntity
    {
        if (!isset(self::$CARTS)) {
            self::$CARTS = new CartIoFieldsEntity('carts');
        }
        return self::$CARTS;
    }
    public static function CARTITEMS(): CartIoFieldsEntity
    {
        if (!isset(self::$CARTITEMS)) {
            self::$CARTITEMS = new CartIoFieldsEntity('cart_items');
        }
        return self::$CARTITEMS;
    }
}