<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Starter implements JsonSerializable
{
    private static Starter $BLANK;
    private static Starter $SIMPLE;
    private static Starter $NEWSLETTER;
    private static Starter $PROMOTION;

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

    public static function BLANK(): Starter
    {
        if (!isset(self::$BLANK)) {
            self::$BLANK = new Starter('blank');
        }
        return self::$BLANK;
    }
    public static function SIMPLE(): Starter
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new Starter('simple');
        }
        return self::$SIMPLE;
    }
    public static function NEWSLETTER(): Starter
    {
        if (!isset(self::$NEWSLETTER)) {
            self::$NEWSLETTER = new Starter('newsletter');
        }
        return self::$NEWSLETTER;
    }
    public static function PROMOTION(): Starter
    {
        if (!isset(self::$PROMOTION)) {
            self::$PROMOTION = new Starter('promotion');
        }
        return self::$PROMOTION;
    }
}