<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRuleChannel implements JsonSerializable
{
    private static AudienceRuleChannel $EMAIL;
    private static AudienceRuleChannel $SMS;
    private static AudienceRuleChannel $WHATSAPP;

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

    public static function EMAIL(): AudienceRuleChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new AudienceRuleChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): AudienceRuleChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new AudienceRuleChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): AudienceRuleChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new AudienceRuleChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}