<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Discarded implements JsonSerializable
{
    private static Discarded $INCLUDE;
    private static Discarded $ONLY;

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

    public static function INCLUDE(): Discarded
    {
        if (!isset(self::$INCLUDE)) {
            self::$INCLUDE = new Discarded('include');
        }
        return self::$INCLUDE;
    }
    public static function ONLY(): Discarded
    {
        if (!isset(self::$ONLY)) {
            self::$ONLY = new Discarded('only');
        }
        return self::$ONLY;
    }
}