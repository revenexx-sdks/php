<?php

namespace Revenexx\Enums;

use JsonSerializable;

class StackingGroupWriteMode implements JsonSerializable
{
    private static StackingGroupWriteMode $STACK;
    private static StackingGroupWriteMode $HIGHESTVALUE;
    private static StackingGroupWriteMode $FIRSTMATCH;

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

    public static function STACK(): StackingGroupWriteMode
    {
        if (!isset(self::$STACK)) {
            self::$STACK = new StackingGroupWriteMode('stack');
        }
        return self::$STACK;
    }
    public static function HIGHESTVALUE(): StackingGroupWriteMode
    {
        if (!isset(self::$HIGHESTVALUE)) {
            self::$HIGHESTVALUE = new StackingGroupWriteMode('highest_value');
        }
        return self::$HIGHESTVALUE;
    }
    public static function FIRSTMATCH(): StackingGroupWriteMode
    {
        if (!isset(self::$FIRSTMATCH)) {
            self::$FIRSTMATCH = new StackingGroupWriteMode('first_match');
        }
        return self::$FIRSTMATCH;
    }
}