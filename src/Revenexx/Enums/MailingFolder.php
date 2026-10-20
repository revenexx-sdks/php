<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingFolder implements JsonSerializable
{
    private static MailingFolder $DRAFTS;
    private static MailingFolder $SCHEDULED;
    private static MailingFolder $SENT;
    private static MailingFolder $ARCHIVED;

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

    public static function DRAFTS(): MailingFolder
    {
        if (!isset(self::$DRAFTS)) {
            self::$DRAFTS = new MailingFolder('drafts');
        }
        return self::$DRAFTS;
    }
    public static function SCHEDULED(): MailingFolder
    {
        if (!isset(self::$SCHEDULED)) {
            self::$SCHEDULED = new MailingFolder('scheduled');
        }
        return self::$SCHEDULED;
    }
    public static function SENT(): MailingFolder
    {
        if (!isset(self::$SENT)) {
            self::$SENT = new MailingFolder('sent');
        }
        return self::$SENT;
    }
    public static function ARCHIVED(): MailingFolder
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new MailingFolder('archived');
        }
        return self::$ARCHIVED;
    }
}