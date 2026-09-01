<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CustomersOrganizationsListStatus implements JsonSerializable
{
    private static CustomersOrganizationsListStatus $ACTIVE;
    private static CustomersOrganizationsListStatus $BLOCKED;

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

    public static function ACTIVE(): CustomersOrganizationsListStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new CustomersOrganizationsListStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function BLOCKED(): CustomersOrganizationsListStatus
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new CustomersOrganizationsListStatus('blocked');
        }
        return self::$BLOCKED;
    }
}