<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Kind implements JsonSerializable
{
    private static Kind $SIMPLE;
    private static Kind $MODEL;
    private static Kind $VARIANT;

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

    public static function SIMPLE(): Kind
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new Kind('simple');
        }
        return self::$SIMPLE;
    }
    public static function MODEL(): Kind
    {
        if (!isset(self::$MODEL)) {
            self::$MODEL = new Kind('model');
        }
        return self::$MODEL;
    }
    public static function VARIANT(): Kind
    {
        if (!isset(self::$VARIANT)) {
            self::$VARIANT = new Kind('variant');
        }
        return self::$VARIANT;
    }
}