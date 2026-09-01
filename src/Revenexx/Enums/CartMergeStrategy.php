<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartMergeStrategy implements JsonSerializable
{
    private static CartMergeStrategy $MERGE;
    private static CartMergeStrategy $REPLACE;

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

    public static function MERGE(): CartMergeStrategy
    {
        if (!isset(self::$MERGE)) {
            self::$MERGE = new CartMergeStrategy('merge');
        }
        return self::$MERGE;
    }
    public static function REPLACE(): CartMergeStrategy
    {
        if (!isset(self::$REPLACE)) {
            self::$REPLACE = new CartMergeStrategy('replace');
        }
        return self::$REPLACE;
    }
}