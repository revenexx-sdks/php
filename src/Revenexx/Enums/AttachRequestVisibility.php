<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttachRequestVisibility implements JsonSerializable
{
    private static AttachRequestVisibility $INTERNAL;
    private static AttachRequestVisibility $CUSTOMER;

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

    public static function INTERNAL(): AttachRequestVisibility
    {
        if (!isset(self::$INTERNAL)) {
            self::$INTERNAL = new AttachRequestVisibility('internal');
        }
        return self::$INTERNAL;
    }
    public static function CUSTOMER(): AttachRequestVisibility
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new AttachRequestVisibility('customer');
        }
        return self::$CUSTOMER;
    }
}