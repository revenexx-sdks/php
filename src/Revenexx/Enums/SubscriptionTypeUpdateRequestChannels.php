<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionTypeUpdateRequestChannels implements JsonSerializable
{
    private static SubscriptionTypeUpdateRequestChannels $EMAIL;
    private static SubscriptionTypeUpdateRequestChannels $SMS;
    private static SubscriptionTypeUpdateRequestChannels $WHATSAPP;

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

    public static function EMAIL(): SubscriptionTypeUpdateRequestChannels
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new SubscriptionTypeUpdateRequestChannels('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): SubscriptionTypeUpdateRequestChannels
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new SubscriptionTypeUpdateRequestChannels('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): SubscriptionTypeUpdateRequestChannels
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new SubscriptionTypeUpdateRequestChannels('whatsapp');
        }
        return self::$WHATSAPP;
    }
}