<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionChannel implements JsonSerializable
{
    private static SubscriptionChannel $EMAIL;
    private static SubscriptionChannel $SMS;
    private static SubscriptionChannel $WHATSAPP;

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

    public static function EMAIL(): SubscriptionChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new SubscriptionChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): SubscriptionChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new SubscriptionChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): SubscriptionChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new SubscriptionChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}