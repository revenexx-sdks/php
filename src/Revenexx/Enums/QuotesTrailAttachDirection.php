<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuotesTrailAttachDirection implements JsonSerializable
{
    private static QuotesTrailAttachDirection $BUYER;
    private static QuotesTrailAttachDirection $SELLER;

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

    public static function BUYER(): QuotesTrailAttachDirection
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new QuotesTrailAttachDirection('buyer');
        }
        return self::$BUYER;
    }
    public static function SELLER(): QuotesTrailAttachDirection
    {
        if (!isset(self::$SELLER)) {
            self::$SELLER = new QuotesTrailAttachDirection('seller');
        }
        return self::$SELLER;
    }
}