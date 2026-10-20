<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionRuleWriteEvent implements JsonSerializable
{
    private static ConversionRuleWriteEvent $ORDERPLACED;
    private static ConversionRuleWriteEvent $SUBSCRIPTIONCONFIRMED;
    private static ConversionRuleWriteEvent $FORMSUBMITTED;

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

    public static function ORDERPLACED(): ConversionRuleWriteEvent
    {
        if (!isset(self::$ORDERPLACED)) {
            self::$ORDERPLACED = new ConversionRuleWriteEvent('order.placed');
        }
        return self::$ORDERPLACED;
    }
    public static function SUBSCRIPTIONCONFIRMED(): ConversionRuleWriteEvent
    {
        if (!isset(self::$SUBSCRIPTIONCONFIRMED)) {
            self::$SUBSCRIPTIONCONFIRMED = new ConversionRuleWriteEvent('subscription.confirmed');
        }
        return self::$SUBSCRIPTIONCONFIRMED;
    }
    public static function FORMSUBMITTED(): ConversionRuleWriteEvent
    {
        if (!isset(self::$FORMSUBMITTED)) {
            self::$FORMSUBMITTED = new ConversionRuleWriteEvent('form.submitted');
        }
        return self::$FORMSUBMITTED;
    }
}