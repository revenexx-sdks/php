<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingRecipientOutcome implements JsonSerializable
{
    private static MailingRecipientOutcome $QUEUED;
    private static MailingRecipientOutcome $SENT;
    private static MailingRecipientOutcome $INELIGIBLE;
    private static MailingRecipientOutcome $GRAYMAIL;
    private static MailingRecipientOutcome $SUPPRESSED;
    private static MailingRecipientOutcome $INVALID;
    private static MailingRecipientOutcome $EXCLUDED;

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

    public static function QUEUED(): MailingRecipientOutcome
    {
        if (!isset(self::$QUEUED)) {
            self::$QUEUED = new MailingRecipientOutcome('queued');
        }
        return self::$QUEUED;
    }
    public static function SENT(): MailingRecipientOutcome
    {
        if (!isset(self::$SENT)) {
            self::$SENT = new MailingRecipientOutcome('sent');
        }
        return self::$SENT;
    }
    public static function INELIGIBLE(): MailingRecipientOutcome
    {
        if (!isset(self::$INELIGIBLE)) {
            self::$INELIGIBLE = new MailingRecipientOutcome('ineligible');
        }
        return self::$INELIGIBLE;
    }
    public static function GRAYMAIL(): MailingRecipientOutcome
    {
        if (!isset(self::$GRAYMAIL)) {
            self::$GRAYMAIL = new MailingRecipientOutcome('graymail');
        }
        return self::$GRAYMAIL;
    }
    public static function SUPPRESSED(): MailingRecipientOutcome
    {
        if (!isset(self::$SUPPRESSED)) {
            self::$SUPPRESSED = new MailingRecipientOutcome('suppressed');
        }
        return self::$SUPPRESSED;
    }
    public static function INVALID(): MailingRecipientOutcome
    {
        if (!isset(self::$INVALID)) {
            self::$INVALID = new MailingRecipientOutcome('invalid');
        }
        return self::$INVALID;
    }
    public static function EXCLUDED(): MailingRecipientOutcome
    {
        if (!isset(self::$EXCLUDED)) {
            self::$EXCLUDED = new MailingRecipientOutcome('excluded');
        }
        return self::$EXCLUDED;
    }
}