<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteEventVisibility implements JsonSerializable
{
    private static QuoteEventVisibility $INTERNAL;
    private static QuoteEventVisibility $CUSTOMER;

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

    public static function INTERNAL(): QuoteEventVisibility
    {
        if (!isset(self::$INTERNAL)) {
            self::$INTERNAL = new QuoteEventVisibility('internal');
        }
        return self::$INTERNAL;
    }
    public static function CUSTOMER(): QuoteEventVisibility
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new QuoteEventVisibility('customer');
        }
        return self::$CUSTOMER;
    }
}