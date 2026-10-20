<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CustomersOrganizationsBlockKind implements JsonSerializable
{
    private static CustomersOrganizationsBlockKind $ORDER;
    private static CustomersOrganizationsBlockKind $DELIVERY;

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

    public static function ORDER(): CustomersOrganizationsBlockKind
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new CustomersOrganizationsBlockKind('order');
        }
        return self::$ORDER;
    }
    public static function DELIVERY(): CustomersOrganizationsBlockKind
    {
        if (!isset(self::$DELIVERY)) {
            self::$DELIVERY = new CustomersOrganizationsBlockKind('delivery');
        }
        return self::$DELIVERY;
    }
}