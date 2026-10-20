<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionTypeCreateRequestChannels implements JsonSerializable
{
    private static SubscriptionTypeCreateRequestChannels $EMAIL;
    private static SubscriptionTypeCreateRequestChannels $SMS;
    private static SubscriptionTypeCreateRequestChannels $WHATSAPP;

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

    public static function EMAIL(): SubscriptionTypeCreateRequestChannels
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new SubscriptionTypeCreateRequestChannels('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): SubscriptionTypeCreateRequestChannels
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new SubscriptionTypeCreateRequestChannels('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): SubscriptionTypeCreateRequestChannels
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new SubscriptionTypeCreateRequestChannels('whatsapp');
        }
        return self::$WHATSAPP;
    }
}