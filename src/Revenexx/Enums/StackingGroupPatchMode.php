<?php

namespace Revenexx\Enums;

use JsonSerializable;

class StackingGroupPatchMode implements JsonSerializable
{
    private static StackingGroupPatchMode $STACK;
    private static StackingGroupPatchMode $HIGHESTVALUE;
    private static StackingGroupPatchMode $FIRSTMATCH;

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

    public static function STACK(): StackingGroupPatchMode
    {
        if (!isset(self::$STACK)) {
            self::$STACK = new StackingGroupPatchMode('stack');
        }
        return self::$STACK;
    }
    public static function HIGHESTVALUE(): StackingGroupPatchMode
    {
        if (!isset(self::$HIGHESTVALUE)) {
            self::$HIGHESTVALUE = new StackingGroupPatchMode('highest_value');
        }
        return self::$HIGHESTVALUE;
    }
    public static function FIRSTMATCH(): StackingGroupPatchMode
    {
        if (!isset(self::$FIRSTMATCH)) {
            self::$FIRSTMATCH = new StackingGroupPatchMode('first_match');
        }
        return self::$FIRSTMATCH;
    }
}