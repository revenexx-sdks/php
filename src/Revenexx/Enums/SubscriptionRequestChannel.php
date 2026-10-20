<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionRequestChannel implements JsonSerializable
{
    private static SubscriptionRequestChannel $EMAIL;
    private static SubscriptionRequestChannel $SMS;
    private static SubscriptionRequestChannel $WHATSAPP;

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

    public static function EMAIL(): SubscriptionRequestChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new SubscriptionRequestChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): SubscriptionRequestChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new SubscriptionRequestChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): SubscriptionRequestChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new SubscriptionRequestChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}