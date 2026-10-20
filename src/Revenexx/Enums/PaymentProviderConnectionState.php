<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentProviderConnectionState implements JsonSerializable
{
    private static PaymentProviderConnectionState $NEVER;
    private static PaymentProviderConnectionState $OK;
    private static PaymentProviderConnectionState $FAILED;

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

    public static function NEVER(): PaymentProviderConnectionState
    {
        if (!isset(self::$NEVER)) {
            self::$NEVER = new PaymentProviderConnectionState('never');
        }
        return self::$NEVER;
    }
    public static function OK(): PaymentProviderConnectionState
    {
        if (!isset(self::$OK)) {
            self::$OK = new PaymentProviderConnectionState('ok');
        }
        return self::$OK;
    }
    public static function FAILED(): PaymentProviderConnectionState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new PaymentProviderConnectionState('failed');
        }
        return self::$FAILED;
    }
}