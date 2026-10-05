<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Audience implements JsonSerializable
{
    private static Audience $CUSTOMER;

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

    public static function CUSTOMER(): Audience
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new Audience('customer');
        }
        return self::$CUSTOMER;
    }
}