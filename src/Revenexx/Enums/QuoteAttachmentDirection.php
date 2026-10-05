<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteAttachmentDirection implements JsonSerializable
{
    private static QuoteAttachmentDirection $BUYER;
    private static QuoteAttachmentDirection $SELLER;

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

    public static function BUYER(): QuoteAttachmentDirection
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new QuoteAttachmentDirection('buyer');
        }
        return self::$BUYER;
    }
    public static function SELLER(): QuoteAttachmentDirection
    {
        if (!isset(self::$SELLER)) {
            self::$SELLER = new QuoteAttachmentDirection('seller');
        }
        return self::$SELLER;
    }
}