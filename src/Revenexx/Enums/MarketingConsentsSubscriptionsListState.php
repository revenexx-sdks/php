<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsSubscriptionsListState implements JsonSerializable
{
    private static MarketingConsentsSubscriptionsListState $PENDING;
    private static MarketingConsentsSubscriptionsListState $CONFIRMED;
    private static MarketingConsentsSubscriptionsListState $WITHDRAWN;
    private static MarketingConsentsSubscriptionsListState $LAPSED;

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

    public static function PENDING(): MarketingConsentsSubscriptionsListState
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new MarketingConsentsSubscriptionsListState('pending');
        }
        return self::$PENDING;
    }
    public static function CONFIRMED(): MarketingConsentsSubscriptionsListState
    {
        if (!isset(self::$CONFIRMED)) {
            self::$CONFIRMED = new MarketingConsentsSubscriptionsListState('confirmed');
        }
        return self::$CONFIRMED;
    }
    public static function WITHDRAWN(): MarketingConsentsSubscriptionsListState
    {
        if (!isset(self::$WITHDRAWN)) {
            self::$WITHDRAWN = new MarketingConsentsSubscriptionsListState('withdrawn');
        }
        return self::$WITHDRAWN;
    }
    public static function LAPSED(): MarketingConsentsSubscriptionsListState
    {
        if (!isset(self::$LAPSED)) {
            self::$LAPSED = new MarketingConsentsSubscriptionsListState('lapsed');
        }
        return self::$LAPSED;
    }
}