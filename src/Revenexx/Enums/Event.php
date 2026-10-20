<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Event implements JsonSerializable
{
    private static Event $ORDERPLACED;
    private static Event $SUBSCRIPTIONCONFIRMED;
    private static Event $FORMSUBMITTED;

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

    public static function ORDERPLACED(): Event
    {
        if (!isset(self::$ORDERPLACED)) {
            self::$ORDERPLACED = new Event('order.placed');
        }
        return self::$ORDERPLACED;
    }
    public static function SUBSCRIPTIONCONFIRMED(): Event
    {
        if (!isset(self::$SUBSCRIPTIONCONFIRMED)) {
            self::$SUBSCRIPTIONCONFIRMED = new Event('subscription.confirmed');
        }
        return self::$SUBSCRIPTIONCONFIRMED;
    }
    public static function FORMSUBMITTED(): Event
    {
        if (!isset(self::$FORMSUBMITTED)) {
            self::$FORMSUBMITTED = new Event('form.submitted');
        }
        return self::$FORMSUBMITTED;
    }
}