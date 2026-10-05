<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteDetailStatus implements JsonSerializable
{
    private static QuoteDetailStatus $REQUESTED;
    private static QuoteDetailStatus $INREVIEW;
    private static QuoteDetailStatus $QUOTED;
    private static QuoteDetailStatus $ACCEPTED;
    private static QuoteDetailStatus $PARTIALLYACCEPTED;
    private static QuoteDetailStatus $DECLINED;
    private static QuoteDetailStatus $REJECTED;
    private static QuoteDetailStatus $EXPIRED;

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

    public static function REQUESTED(): QuoteDetailStatus
    {
        if (!isset(self::$REQUESTED)) {
            self::$REQUESTED = new QuoteDetailStatus('requested');
        }
        return self::$REQUESTED;
    }
    public static function INREVIEW(): QuoteDetailStatus
    {
        if (!isset(self::$INREVIEW)) {
            self::$INREVIEW = new QuoteDetailStatus('in_review');
        }
        return self::$INREVIEW;
    }
    public static function QUOTED(): QuoteDetailStatus
    {
        if (!isset(self::$QUOTED)) {
            self::$QUOTED = new QuoteDetailStatus('quoted');
        }
        return self::$QUOTED;
    }
    public static function ACCEPTED(): QuoteDetailStatus
    {
        if (!isset(self::$ACCEPTED)) {
            self::$ACCEPTED = new QuoteDetailStatus('accepted');
        }
        return self::$ACCEPTED;
    }
    public static function PARTIALLYACCEPTED(): QuoteDetailStatus
    {
        if (!isset(self::$PARTIALLYACCEPTED)) {
            self::$PARTIALLYACCEPTED = new QuoteDetailStatus('partially_accepted');
        }
        return self::$PARTIALLYACCEPTED;
    }
    public static function DECLINED(): QuoteDetailStatus
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new QuoteDetailStatus('declined');
        }
        return self::$DECLINED;
    }
    public static function REJECTED(): QuoteDetailStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new QuoteDetailStatus('rejected');
        }
        return self::$REJECTED;
    }
    public static function EXPIRED(): QuoteDetailStatus
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new QuoteDetailStatus('expired');
        }
        return self::$EXPIRED;
    }
}