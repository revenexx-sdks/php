<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Period implements JsonSerializable
{
    private static Period $CALENDARYEAR;
    private static Period $ROLLING12M;

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

    public static function CALENDARYEAR(): Period
    {
        if (!isset(self::$CALENDARYEAR)) {
            self::$CALENDARYEAR = new Period('calendar_year');
        }
        return self::$CALENDARYEAR;
    }
    public static function ROLLING12M(): Period
    {
        if (!isset(self::$ROLLING12M)) {
            self::$ROLLING12M = new Period('rolling_12m');
        }
        return self::$ROLLING12M;
    }
}