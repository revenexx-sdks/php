<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceCheckResponseReasonCode implements JsonSerializable
{
    private static PriceCheckResponseReasonCode $CONTACT;
    private static PriceCheckResponseReasonCode $ORGANIZATION;
    private static PriceCheckResponseReasonCode $SEGMENT;
    private static PriceCheckResponseReasonCode $CHANNEL;
    private static PriceCheckResponseReasonCode $DEFAULT;
    private static PriceCheckResponseReasonCode $OPEN;
    private static PriceCheckResponseReasonCode $ONREQUESTENTRY;
    private static PriceCheckResponseReasonCode $NOTPRICED;

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

    public static function CONTACT(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new PriceCheckResponseReasonCode('contact');
        }
        return self::$CONTACT;
    }
    public static function ORGANIZATION(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new PriceCheckResponseReasonCode('organization');
        }
        return self::$ORGANIZATION;
    }
    public static function SEGMENT(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$SEGMENT)) {
            self::$SEGMENT = new PriceCheckResponseReasonCode('segment');
        }
        return self::$SEGMENT;
    }
    public static function CHANNEL(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$CHANNEL)) {
            self::$CHANNEL = new PriceCheckResponseReasonCode('channel');
        }
        return self::$CHANNEL;
    }
    public static function DEFAULT(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new PriceCheckResponseReasonCode('default');
        }
        return self::$DEFAULT;
    }
    public static function OPEN(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$OPEN)) {
            self::$OPEN = new PriceCheckResponseReasonCode('open');
        }
        return self::$OPEN;
    }
    public static function ONREQUESTENTRY(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$ONREQUESTENTRY)) {
            self::$ONREQUESTENTRY = new PriceCheckResponseReasonCode('on_request_entry');
        }
        return self::$ONREQUESTENTRY;
    }
    public static function NOTPRICED(): PriceCheckResponseReasonCode
    {
        if (!isset(self::$NOTPRICED)) {
            self::$NOTPRICED = new PriceCheckResponseReasonCode('not_priced');
        }
        return self::$NOTPRICED;
    }
}