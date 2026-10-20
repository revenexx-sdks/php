<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Sort implements JsonSerializable
{
    private static Sort $NEWEST;
    private static Sort $OLDEST;
    private static Sort $RATINGDESC;
    private static Sort $RATINGASC;

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

    public static function NEWEST(): Sort
    {
        if (!isset(self::$NEWEST)) {
            self::$NEWEST = new Sort('newest');
        }
        return self::$NEWEST;
    }
    public static function OLDEST(): Sort
    {
        if (!isset(self::$OLDEST)) {
            self::$OLDEST = new Sort('oldest');
        }
        return self::$OLDEST;
    }
    public static function RATINGDESC(): Sort
    {
        if (!isset(self::$RATINGDESC)) {
            self::$RATINGDESC = new Sort('rating_desc');
        }
        return self::$RATINGDESC;
    }
    public static function RATINGASC(): Sort
    {
        if (!isset(self::$RATINGASC)) {
            self::$RATINGASC = new Sort('rating_asc');
        }
        return self::$RATINGASC;
    }
}