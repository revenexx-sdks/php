<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OpenQuoteItemDecision implements JsonSerializable
{
    private static OpenQuoteItemDecision $OPEN;
    private static OpenQuoteItemDecision $ACCEPTED;
    private static OpenQuoteItemDecision $DECLINED;

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

    public static function OPEN(): OpenQuoteItemDecision
    {
        if (!isset(self::$OPEN)) {
            self::$OPEN = new OpenQuoteItemDecision('open');
        }
        return self::$OPEN;
    }
    public static function ACCEPTED(): OpenQuoteItemDecision
    {
        if (!isset(self::$ACCEPTED)) {
            self::$ACCEPTED = new OpenQuoteItemDecision('accepted');
        }
        return self::$ACCEPTED;
    }
    public static function DECLINED(): OpenQuoteItemDecision
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new OpenQuoteItemDecision('declined');
        }
        return self::$DECLINED;
    }
}