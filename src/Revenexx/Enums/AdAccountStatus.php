<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AdAccountStatus implements JsonSerializable
{
    private static AdAccountStatus $CONNECTED;
    private static AdAccountStatus $ERROR;
    private static AdAccountStatus $DISCONNECTED;

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

    public static function CONNECTED(): AdAccountStatus
    {
        if (!isset(self::$CONNECTED)) {
            self::$CONNECTED = new AdAccountStatus('connected');
        }
        return self::$CONNECTED;
    }
    public static function ERROR(): AdAccountStatus
    {
        if (!isset(self::$ERROR)) {
            self::$ERROR = new AdAccountStatus('error');
        }
        return self::$ERROR;
    }
    public static function DISCONNECTED(): AdAccountStatus
    {
        if (!isset(self::$DISCONNECTED)) {
            self::$DISCONNECTED = new AdAccountStatus('disconnected');
        }
        return self::$DISCONNECTED;
    }
}