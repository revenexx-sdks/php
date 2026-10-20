<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartIoFieldEntity implements JsonSerializable
{
    private static CartIoFieldEntity $CARTS;
    private static CartIoFieldEntity $CARTITEMS;

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

    public static function CARTS(): CartIoFieldEntity
    {
        if (!isset(self::$CARTS)) {
            self::$CARTS = new CartIoFieldEntity('carts');
        }
        return self::$CARTS;
    }
    public static function CARTITEMS(): CartIoFieldEntity
    {
        if (!isset(self::$CARTITEMS)) {
            self::$CARTITEMS = new CartIoFieldEntity('cart_items');
        }
        return self::$CARTITEMS;
    }
}