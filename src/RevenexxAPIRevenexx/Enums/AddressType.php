<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AddressType implements JsonSerializable
{
    private static AddressType $BILLING;
    private static AddressType $SHIPPING;

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

    public static function BILLING(): AddressType
    {
        if (!isset(self::$BILLING)) {
            self::$BILLING = new AddressType('billing');
        }
        return self::$BILLING;
    }
    public static function SHIPPING(): AddressType
    {
        if (!isset(self::$SHIPPING)) {
            self::$SHIPPING = new AddressType('shipping');
        }
        return self::$SHIPPING;
    }
}