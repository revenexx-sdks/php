<?php

namespace Revenexx\Enums;

use JsonSerializable;

class StackingGroupMode implements JsonSerializable
{
    private static StackingGroupMode $STACK;
    private static StackingGroupMode $HIGHESTVALUE;
    private static StackingGroupMode $FIRSTMATCH;

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

    public static function STACK(): StackingGroupMode
    {
        if (!isset(self::$STACK)) {
            self::$STACK = new StackingGroupMode('stack');
        }
        return self::$STACK;
    }
    public static function HIGHESTVALUE(): StackingGroupMode
    {
        if (!isset(self::$HIGHESTVALUE)) {
            self::$HIGHESTVALUE = new StackingGroupMode('highest_value');
        }
        return self::$HIGHESTVALUE;
    }
    public static function FIRSTMATCH(): StackingGroupMode
    {
        if (!isset(self::$FIRSTMATCH)) {
            self::$FIRSTMATCH = new StackingGroupMode('first_match');
        }
        return self::$FIRSTMATCH;
    }
}