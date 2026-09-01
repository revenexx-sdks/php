<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentFailureCode implements JsonSerializable
{
    private static PaymentFailureCode $PROVIDERUNAVAILABLE;
    private static PaymentFailureCode $PROVIDERUNREACHABLE;
    private static PaymentFailureCode $PROVIDERNOTCONFIGURED;
    private static PaymentFailureCode $PROVIDERDECLINED;
    private static PaymentFailureCode $PROVIDERERROR;

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

    public static function PROVIDERUNAVAILABLE(): PaymentFailureCode
    {
        if (!isset(self::$PROVIDERUNAVAILABLE)) {
            self::$PROVIDERUNAVAILABLE = new PaymentFailureCode('provider_unavailable');
        }
        return self::$PROVIDERUNAVAILABLE;
    }
    public static function PROVIDERUNREACHABLE(): PaymentFailureCode
    {
        if (!isset(self::$PROVIDERUNREACHABLE)) {
            self::$PROVIDERUNREACHABLE = new PaymentFailureCode('provider_unreachable');
        }
        return self::$PROVIDERUNREACHABLE;
    }
    public static function PROVIDERNOTCONFIGURED(): PaymentFailureCode
    {
        if (!isset(self::$PROVIDERNOTCONFIGURED)) {
            self::$PROVIDERNOTCONFIGURED = new PaymentFailureCode('provider_not_configured');
        }
        return self::$PROVIDERNOTCONFIGURED;
    }
    public static function PROVIDERDECLINED(): PaymentFailureCode
    {
        if (!isset(self::$PROVIDERDECLINED)) {
            self::$PROVIDERDECLINED = new PaymentFailureCode('provider_declined');
        }
        return self::$PROVIDERDECLINED;
    }
    public static function PROVIDERERROR(): PaymentFailureCode
    {
        if (!isset(self::$PROVIDERERROR)) {
            self::$PROVIDERERROR = new PaymentFailureCode('provider_error');
        }
        return self::$PROVIDERERROR;
    }
}