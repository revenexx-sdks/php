<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Load implements JsonSerializable
{
    private static Load $IMMEDIATE;
    private static Load $IDLE;
    private static Load $INTERACTION;

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

    public static function IMMEDIATE(): Load
    {
        if (!isset(self::$IMMEDIATE)) {
            self::$IMMEDIATE = new Load('immediate');
        }
        return self::$IMMEDIATE;
    }
    public static function IDLE(): Load
    {
        if (!isset(self::$IDLE)) {
            self::$IDLE = new Load('idle');
        }
        return self::$IDLE;
    }
    public static function INTERACTION(): Load
    {
        if (!isset(self::$INTERACTION)) {
            self::$INTERACTION = new Load('interaction');
        }
        return self::$INTERACTION;
    }
}