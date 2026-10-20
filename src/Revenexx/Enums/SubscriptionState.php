<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionState implements JsonSerializable
{
    private static SubscriptionState $PENDING;
    private static SubscriptionState $CONFIRMED;
    private static SubscriptionState $WITHDRAWN;
    private static SubscriptionState $LAPSED;

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

    public static function PENDING(): SubscriptionState
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new SubscriptionState('pending');
        }
        return self::$PENDING;
    }
    public static function CONFIRMED(): SubscriptionState
    {
        if (!isset(self::$CONFIRMED)) {
            self::$CONFIRMED = new SubscriptionState('confirmed');
        }
        return self::$CONFIRMED;
    }
    public static function WITHDRAWN(): SubscriptionState
    {
        if (!isset(self::$WITHDRAWN)) {
            self::$WITHDRAWN = new SubscriptionState('withdrawn');
        }
        return self::$WITHDRAWN;
    }
    public static function LAPSED(): SubscriptionState
    {
        if (!isset(self::$LAPSED)) {
            self::$LAPSED = new SubscriptionState('lapsed');
        }
        return self::$LAPSED;
    }
}