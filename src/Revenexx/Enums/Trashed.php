<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Trashed implements JsonSerializable
{
    private static Trashed $EXCLUDE;
    private static Trashed $ONLY;
    private static Trashed $INCLUDE;

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

    public static function EXCLUDE(): Trashed
    {
        if (!isset(self::$EXCLUDE)) {
            self::$EXCLUDE = new Trashed('exclude');
        }
        return self::$EXCLUDE;
    }
    public static function ONLY(): Trashed
    {
        if (!isset(self::$ONLY)) {
            self::$ONLY = new Trashed('only');
        }
        return self::$ONLY;
    }
    public static function INCLUDE(): Trashed
    {
        if (!isset(self::$INCLUDE)) {
            self::$INCLUDE = new Trashed('include');
        }
        return self::$INCLUDE;
    }
}