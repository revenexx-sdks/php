<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AccountStatusStatus implements JsonSerializable
{
    private static AccountStatusStatus $CONNECTED;
    private static AccountStatusStatus $ERROR;
    private static AccountStatusStatus $DISCONNECTED;

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

    public static function CONNECTED(): AccountStatusStatus
    {
        if (!isset(self::$CONNECTED)) {
            self::$CONNECTED = new AccountStatusStatus('connected');
        }
        return self::$CONNECTED;
    }
    public static function ERROR(): AccountStatusStatus
    {
        if (!isset(self::$ERROR)) {
            self::$ERROR = new AccountStatusStatus('error');
        }
        return self::$ERROR;
    }
    public static function DISCONNECTED(): AccountStatusStatus
    {
        if (!isset(self::$DISCONNECTED)) {
            self::$DISCONNECTED = new AccountStatusStatus('disconnected');
        }
        return self::$DISCONNECTED;
    }
}