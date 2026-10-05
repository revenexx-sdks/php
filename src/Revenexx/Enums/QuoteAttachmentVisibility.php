<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteAttachmentVisibility implements JsonSerializable
{
    private static QuoteAttachmentVisibility $INTERNAL;
    private static QuoteAttachmentVisibility $CUSTOMER;

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

    public static function INTERNAL(): QuoteAttachmentVisibility
    {
        if (!isset(self::$INTERNAL)) {
            self::$INTERNAL = new QuoteAttachmentVisibility('internal');
        }
        return self::$INTERNAL;
    }
    public static function CUSTOMER(): QuoteAttachmentVisibility
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new QuoteAttachmentVisibility('customer');
        }
        return self::$CUSTOMER;
    }
}