<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationStatus implements JsonSerializable
{
    private static OrganizationStatus $ACTIVE;
    private static OrganizationStatus $BLOCKED;

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

    public static function ACTIVE(): OrganizationStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new OrganizationStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function BLOCKED(): OrganizationStatus
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new OrganizationStatus('blocked');
        }
        return self::$BLOCKED;
    }
}