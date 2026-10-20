<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionRulePatchEvent implements JsonSerializable
{
    private static ConversionRulePatchEvent $ORDERPLACED;
    private static ConversionRulePatchEvent $SUBSCRIPTIONCONFIRMED;
    private static ConversionRulePatchEvent $FORMSUBMITTED;

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

    public static function ORDERPLACED(): ConversionRulePatchEvent
    {
        if (!isset(self::$ORDERPLACED)) {
            self::$ORDERPLACED = new ConversionRulePatchEvent('order.placed');
        }
        return self::$ORDERPLACED;
    }
    public static function SUBSCRIPTIONCONFIRMED(): ConversionRulePatchEvent
    {
        if (!isset(self::$SUBSCRIPTIONCONFIRMED)) {
            self::$SUBSCRIPTIONCONFIRMED = new ConversionRulePatchEvent('subscription.confirmed');
        }
        return self::$SUBSCRIPTIONCONFIRMED;
    }
    public static function FORMSUBMITTED(): ConversionRulePatchEvent
    {
        if (!isset(self::$FORMSUBMITTED)) {
            self::$FORMSUBMITTED = new ConversionRulePatchEvent('form.submitted');
        }
        return self::$FORMSUBMITTED;
    }
}