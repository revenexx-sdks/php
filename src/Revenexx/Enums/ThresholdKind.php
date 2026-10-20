<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ThresholdKind implements JsonSerializable
{
    private static ThresholdKind $ABSOLUTE;
    private static ThresholdKind $RELATIVETOBASE;

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

    public static function ABSOLUTE(): ThresholdKind
    {
        if (!isset(self::$ABSOLUTE)) {
            self::$ABSOLUTE = new ThresholdKind('absolute');
        }
        return self::$ABSOLUTE;
    }
    public static function RELATIVETOBASE(): ThresholdKind
    {
        if (!isset(self::$RELATIVETOBASE)) {
            self::$RELATIVETOBASE = new ThresholdKind('relative_to_base');
        }
        return self::$RELATIVETOBASE;
    }
}