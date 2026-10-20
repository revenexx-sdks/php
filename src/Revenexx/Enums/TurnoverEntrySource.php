<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TurnoverEntrySource implements JsonSerializable
{
    private static TurnoverEntrySource $ORDER;
    private static TurnoverEntrySource $RETURN;
    private static TurnoverEntrySource $IMPORT;
    private static TurnoverEntrySource $ADJUST;

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

    public static function ORDER(): TurnoverEntrySource
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new TurnoverEntrySource('order');
        }
        return self::$ORDER;
    }
    public static function RETURN(): TurnoverEntrySource
    {
        if (!isset(self::$RETURN)) {
            self::$RETURN = new TurnoverEntrySource('return');
        }
        return self::$RETURN;
    }
    public static function IMPORT(): TurnoverEntrySource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new TurnoverEntrySource('import');
        }
        return self::$IMPORT;
    }
    public static function ADJUST(): TurnoverEntrySource
    {
        if (!isset(self::$ADJUST)) {
            self::$ADJUST = new TurnoverEntrySource('adjust');
        }
        return self::$ADJUST;
    }
}