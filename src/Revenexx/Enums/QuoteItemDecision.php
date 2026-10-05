<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteItemDecision implements JsonSerializable
{
    private static QuoteItemDecision $OPEN;
    private static QuoteItemDecision $ACCEPTED;
    private static QuoteItemDecision $DECLINED;

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

    public static function OPEN(): QuoteItemDecision
    {
        if (!isset(self::$OPEN)) {
            self::$OPEN = new QuoteItemDecision('open');
        }
        return self::$OPEN;
    }
    public static function ACCEPTED(): QuoteItemDecision
    {
        if (!isset(self::$ACCEPTED)) {
            self::$ACCEPTED = new QuoteItemDecision('accepted');
        }
        return self::$ACCEPTED;
    }
    public static function DECLINED(): QuoteItemDecision
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new QuoteItemDecision('declined');
        }
        return self::$DECLINED;
    }
}