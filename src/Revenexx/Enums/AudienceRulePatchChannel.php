<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRulePatchChannel implements JsonSerializable
{
    private static AudienceRulePatchChannel $EMAIL;
    private static AudienceRulePatchChannel $SMS;
    private static AudienceRulePatchChannel $WHATSAPP;

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

    public static function EMAIL(): AudienceRulePatchChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new AudienceRulePatchChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): AudienceRulePatchChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new AudienceRulePatchChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): AudienceRulePatchChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new AudienceRulePatchChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}