<?php

namespace Revenexx\Enums;

use JsonSerializable;

class UnitChoice implements JsonSerializable
{
    private static UnitChoice $CHEAPEST;
    private static UnitChoice $DEAREST;
    private static UnitChoice $POSITION;
    private static UnitChoice $ALL;

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

    public static function CHEAPEST(): UnitChoice
    {
        if (!isset(self::$CHEAPEST)) {
            self::$CHEAPEST = new UnitChoice('cheapest');
        }
        return self::$CHEAPEST;
    }
    public static function DEAREST(): UnitChoice
    {
        if (!isset(self::$DEAREST)) {
            self::$DEAREST = new UnitChoice('dearest');
        }
        return self::$DEAREST;
    }
    public static function POSITION(): UnitChoice
    {
        if (!isset(self::$POSITION)) {
            self::$POSITION = new UnitChoice('position');
        }
        return self::$POSITION;
    }
    public static function ALL(): UnitChoice
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new UnitChoice('all');
        }
        return self::$ALL;
    }
}