<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Source implements JsonSerializable
{
    private static Source $MANUAL;
    private static Source $RULE;

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

    public static function MANUAL(): Source
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new Source('manual');
        }
        return self::$MANUAL;
    }
    public static function RULE(): Source
    {
        if (!isset(self::$RULE)) {
            self::$RULE = new Source('rule');
        }
        return self::$RULE;
    }
}