<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormSubmissionConsentChannel implements JsonSerializable
{
    private static FormSubmissionConsentChannel $SMS;
    private static FormSubmissionConsentChannel $WHATSAPP;

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

    public static function SMS(): FormSubmissionConsentChannel
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new FormSubmissionConsentChannel('sms');
        }
        return self::$SMS;
    }
    public static function WHATSAPP(): FormSubmissionConsentChannel
    {
        if (!isset(self::$WHATSAPP)) {
            self::$WHATSAPP = new FormSubmissionConsentChannel('whatsapp');
        }
        return self::$WHATSAPP;
    }
}