<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentProviderCheckEnvironment implements JsonSerializable
{
    private static PaymentProviderCheckEnvironment $SANDBOX;
    private static PaymentProviderCheckEnvironment $LIVE;

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

    public static function SANDBOX(): PaymentProviderCheckEnvironment
    {
        if (!isset(self::$SANDBOX)) {
            self::$SANDBOX = new PaymentProviderCheckEnvironment('sandbox');
        }
        return self::$SANDBOX;
    }
    public static function LIVE(): PaymentProviderCheckEnvironment
    {
        if (!isset(self::$LIVE)) {
            self::$LIVE = new PaymentProviderCheckEnvironment('live');
        }
        return self::$LIVE;
    }
}