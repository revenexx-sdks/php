<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRuleWriteChannel implements JsonSerializable
{
    private static AudienceRuleWriteChannel $EMAIL;
    private static AudienceRuleWriteChannel $SMS;
    private static AudienceRuleWriteChannel $WHATSAPP;

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

    public static function EMAIL(): AudienceRuleWriteChannel
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new AudienceRuleWriteChannel('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): AudienceRuleWriteChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new AudienceRuleWriteChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): AudienceRuleWriteChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new AudienceRuleWriteChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}