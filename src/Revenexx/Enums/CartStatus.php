<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartStatus implements JsonSerializable
{
    private static CartStatus $ACTIVE;
    private static CartStatus $ABANDONED;
    private static CartStatus $ORDERED;
    private static CartStatus $MERGED;

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

    public static function ACTIVE(): CartStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new CartStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function ABANDONED(): CartStatus
    {
        if (!isset(self::$ABANDONED)) {
            self::$ABANDONED = new CartStatus('abandoned');
        }
        return self::$ABANDONED;
    }
    public static function ORDERED(): CartStatus
    {
        if (!isset(self::$ORDERED)) {
            self::$ORDERED = new CartStatus('ordered');
        }
        return self::$ORDERED;
    }
    public static function MERGED(): CartStatus
    {
        if (!isset(self::$MERGED)) {
            self::$MERGED = new CartStatus('merged');
        }
        return self::$MERGED;
    }
}