<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Status implements JsonSerializable
{
    private static Status $INVITED;
    private static Status $ACTIVE;
    private static Status $BLOCKED;

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

    public static function INVITED(): Status
    {
        if (!isset(self::$INVITED)) {
            self::$INVITED = new Status('invited');
        }
        return self::$INVITED;
    }
    public static function ACTIVE(): Status
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new Status('active');
        }
        return self::$ACTIVE;
    }
    public static function BLOCKED(): Status
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new Status('blocked');
        }
        return self::$BLOCKED;
    }
}