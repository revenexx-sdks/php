<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OpenQuoteItemQuoteStatus implements JsonSerializable
{
    private static OpenQuoteItemQuoteStatus $REQUESTED;
    private static OpenQuoteItemQuoteStatus $INREVIEW;
    private static OpenQuoteItemQuoteStatus $QUOTED;
    private static OpenQuoteItemQuoteStatus $ACCEPTED;
    private static OpenQuoteItemQuoteStatus $PARTIALLYACCEPTED;
    private static OpenQuoteItemQuoteStatus $DECLINED;
    private static OpenQuoteItemQuoteStatus $REJECTED;
    private static OpenQuoteItemQuoteStatus $EXPIRED;

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

    public static function REQUESTED(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$REQUESTED)) {
            self::$REQUESTED = new OpenQuoteItemQuoteStatus('requested');
        }
        return self::$REQUESTED;
    }
    public static function INREVIEW(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$INREVIEW)) {
            self::$INREVIEW = new OpenQuoteItemQuoteStatus('in_review');
        }
        return self::$INREVIEW;
    }
    public static function QUOTED(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$QUOTED)) {
            self::$QUOTED = new OpenQuoteItemQuoteStatus('quoted');
        }
        return self::$QUOTED;
    }
    public static function ACCEPTED(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$ACCEPTED)) {
            self::$ACCEPTED = new OpenQuoteItemQuoteStatus('accepted');
        }
        return self::$ACCEPTED;
    }
    public static function PARTIALLYACCEPTED(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$PARTIALLYACCEPTED)) {
            self::$PARTIALLYACCEPTED = new OpenQuoteItemQuoteStatus('partially_accepted');
        }
        return self::$PARTIALLYACCEPTED;
    }
    public static function DECLINED(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new OpenQuoteItemQuoteStatus('declined');
        }
        return self::$DECLINED;
    }
    public static function REJECTED(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new OpenQuoteItemQuoteStatus('rejected');
        }
        return self::$REJECTED;
    }
    public static function EXPIRED(): OpenQuoteItemQuoteStatus
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new OpenQuoteItemQuoteStatus('expired');
        }
        return self::$EXPIRED;
    }
}