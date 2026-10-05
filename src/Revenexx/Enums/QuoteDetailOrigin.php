<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteDetailOrigin implements JsonSerializable
{
    private static QuoteDetailOrigin $BUYER;
    private static QuoteDetailOrigin $SELLER;

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

    public static function BUYER(): QuoteDetailOrigin
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new QuoteDetailOrigin('buyer');
        }
        return self::$BUYER;
    }
    public static function SELLER(): QuoteDetailOrigin
    {
        if (!isset(self::$SELLER)) {
            self::$SELLER = new QuoteDetailOrigin('seller');
        }
        return self::$SELLER;
    }
}