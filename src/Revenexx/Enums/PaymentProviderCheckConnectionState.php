<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentProviderCheckConnectionState implements JsonSerializable
{
    private static PaymentProviderCheckConnectionState $NEVER;
    private static PaymentProviderCheckConnectionState $OK;
    private static PaymentProviderCheckConnectionState $FAILED;

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

    public static function NEVER(): PaymentProviderCheckConnectionState
    {
        if (!isset(self::$NEVER)) {
            self::$NEVER = new PaymentProviderCheckConnectionState('never');
        }
        return self::$NEVER;
    }
    public static function OK(): PaymentProviderCheckConnectionState
    {
        if (!isset(self::$OK)) {
            self::$OK = new PaymentProviderCheckConnectionState('ok');
        }
        return self::$OK;
    }
    public static function FAILED(): PaymentProviderCheckConnectionState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new PaymentProviderCheckConnectionState('failed');
        }
        return self::$FAILED;
    }
}