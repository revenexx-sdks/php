<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationBlockRequestKind implements JsonSerializable
{
    private static OrganizationBlockRequestKind $ORDER;
    private static OrganizationBlockRequestKind $DELIVERY;

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

    public static function ORDER(): OrganizationBlockRequestKind
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new OrganizationBlockRequestKind('order');
        }
        return self::$ORDER;
    }
    public static function DELIVERY(): OrganizationBlockRequestKind
    {
        if (!isset(self::$DELIVERY)) {
            self::$DELIVERY = new OrganizationBlockRequestKind('delivery');
        }
        return self::$DELIVERY;
    }
}