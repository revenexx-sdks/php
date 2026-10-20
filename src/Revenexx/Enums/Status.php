<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Status implements JsonSerializable
{
    private static Status $CONNECTED;
    private static Status $ERROR;
    private static Status $DISCONNECTED;

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

    public static function CONNECTED(): Status
    {
        if (!isset(self::$CONNECTED)) {
            self::$CONNECTED = new Status('connected');
        }
        return self::$CONNECTED;
    }
    public static function ERROR(): Status
    {
        if (!isset(self::$ERROR)) {
            self::$ERROR = new Status('error');
        }
        return self::$ERROR;
    }
    public static function DISCONNECTED(): Status
    {
        if (!isset(self::$DISCONNECTED)) {
            self::$DISCONNECTED = new Status('disconnected');
        }
        return self::$DISCONNECTED;
    }
}