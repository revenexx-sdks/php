<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteStatus implements JsonSerializable
{
    private static QuoteStatus $REQUESTED;
    private static QuoteStatus $INREVIEW;
    private static QuoteStatus $QUOTED;
    private static QuoteStatus $ACCEPTED;
    private static QuoteStatus $PARTIALLYACCEPTED;
    private static QuoteStatus $DECLINED;
    private static QuoteStatus $REJECTED;
    private static QuoteStatus $EXPIRED;

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

    public static function REQUESTED(): QuoteStatus
    {
        if (!isset(self::$REQUESTED)) {
            self::$REQUESTED = new QuoteStatus('requested');
        }
        return self::$REQUESTED;
    }
    public static function INREVIEW(): QuoteStatus
    {
        if (!isset(self::$INREVIEW)) {
            self::$INREVIEW = new QuoteStatus('in_review');
        }
        return self::$INREVIEW;
    }
    public static function QUOTED(): QuoteStatus
    {
        if (!isset(self::$QUOTED)) {
            self::$QUOTED = new QuoteStatus('quoted');
        }
        return self::$QUOTED;
    }
    public static function ACCEPTED(): QuoteStatus
    {
        if (!isset(self::$ACCEPTED)) {
            self::$ACCEPTED = new QuoteStatus('accepted');
        }
        return self::$ACCEPTED;
    }
    public static function PARTIALLYACCEPTED(): QuoteStatus
    {
        if (!isset(self::$PARTIALLYACCEPTED)) {
            self::$PARTIALLYACCEPTED = new QuoteStatus('partially_accepted');
        }
        return self::$PARTIALLYACCEPTED;
    }
    public static function DECLINED(): QuoteStatus
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new QuoteStatus('declined');
        }
        return self::$DECLINED;
    }
    public static function REJECTED(): QuoteStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new QuoteStatus('rejected');
        }
        return self::$REJECTED;
    }
    public static function EXPIRED(): QuoteStatus
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new QuoteStatus('expired');
        }
        return self::$EXPIRED;
    }
}