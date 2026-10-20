<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuotesPricingReviewState implements JsonSerializable
{
    private static QuotesPricingReviewState $ISSUED;
    private static QuotesPricingReviewState $USED;
    private static QuotesPricingReviewState $EXPIRED;

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

    public static function ISSUED(): QuotesPricingReviewState
    {
        if (!isset(self::$ISSUED)) {
            self::$ISSUED = new QuotesPricingReviewState('issued');
        }
        return self::$ISSUED;
    }
    public static function USED(): QuotesPricingReviewState
    {
        if (!isset(self::$USED)) {
            self::$USED = new QuotesPricingReviewState('used');
        }
        return self::$USED;
    }
    public static function EXPIRED(): QuotesPricingReviewState
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new QuotesPricingReviewState('expired');
        }
        return self::$EXPIRED;
    }
}