<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Direction implements JsonSerializable
{
    private static Direction $IMPORT;
    private static Direction $EXPORT;

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

    public static function IMPORT(): Direction
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new Direction('import');
        }
        return self::$IMPORT;
    }
    public static function EXPORT(): Direction
    {
        if (!isset(self::$EXPORT)) {
            self::$EXPORT = new Direction('export');
        }
        return self::$EXPORT;
    }
}