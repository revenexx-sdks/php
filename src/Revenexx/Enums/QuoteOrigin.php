<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteOrigin implements JsonSerializable
{
    private static QuoteOrigin $BUYER;
    private static QuoteOrigin $SELLER;

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

    public static function BUYER(): QuoteOrigin
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new QuoteOrigin('buyer');
        }
        return self::$BUYER;
    }
    public static function SELLER(): QuoteOrigin
    {
        if (!isset(self::$SELLER)) {
            self::$SELLER = new QuoteOrigin('seller');
        }
        return self::$SELLER;
    }
}