<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentProviderEnvironment implements JsonSerializable
{
    private static PaymentProviderEnvironment $SANDBOX;
    private static PaymentProviderEnvironment $LIVE;

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

    public static function SANDBOX(): PaymentProviderEnvironment
    {
        if (!isset(self::$SANDBOX)) {
            self::$SANDBOX = new PaymentProviderEnvironment('sandbox');
        }
        return self::$SANDBOX;
    }
    public static function LIVE(): PaymentProviderEnvironment
    {
        if (!isset(self::$LIVE)) {
            self::$LIVE = new PaymentProviderEnvironment('live');
        }
        return self::$LIVE;
    }
}