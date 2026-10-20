<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionRuleEvent implements JsonSerializable
{
    private static ConversionRuleEvent $ORDERPLACED;
    private static ConversionRuleEvent $SUBSCRIPTIONCONFIRMED;
    private static ConversionRuleEvent $FORMSUBMITTED;

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

    public static function ORDERPLACED(): ConversionRuleEvent
    {
        if (!isset(self::$ORDERPLACED)) {
            self::$ORDERPLACED = new ConversionRuleEvent('order.placed');
        }
        return self::$ORDERPLACED;
    }
    public static function SUBSCRIPTIONCONFIRMED(): ConversionRuleEvent
    {
        if (!isset(self::$SUBSCRIPTIONCONFIRMED)) {
            self::$SUBSCRIPTIONCONFIRMED = new ConversionRuleEvent('subscription.confirmed');
        }
        return self::$SUBSCRIPTIONCONFIRMED;
    }
    public static function FORMSUBMITTED(): ConversionRuleEvent
    {
        if (!isset(self::$FORMSUBMITTED)) {
            self::$FORMSUBMITTED = new ConversionRuleEvent('form.submitted');
        }
        return self::$FORMSUBMITTED;
    }
}