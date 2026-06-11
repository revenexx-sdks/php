<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class Type implements JsonSerializable
{
    private static Type $COMMIT;
    private static Type $BRANCH;
    private static Type $TAG;

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

    public static function COMMIT(): Type
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new Type('commit');
        }
        return self::$COMMIT;
    }
    public static function BRANCH(): Type
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new Type('branch');
        }
        return self::$BRANCH;
    }
    public static function TAG(): Type
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new Type('tag');
        }
        return self::$TAG;
    }
}