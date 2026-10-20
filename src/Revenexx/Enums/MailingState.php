<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingState implements JsonSerializable
{
    private static MailingState $DRAFT;
    private static MailingState $SCHEDULED;
    private static MailingState $SENDING;
    private static MailingState $SENT;
    private static MailingState $CANCELLED;
    private static MailingState $FAILED;

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

    public static function DRAFT(): MailingState
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new MailingState('draft');
        }
        return self::$DRAFT;
    }
    public static function SCHEDULED(): MailingState
    {
        if (!isset(self::$SCHEDULED)) {
            self::$SCHEDULED = new MailingState('scheduled');
        }
        return self::$SCHEDULED;
    }
    public static function SENDING(): MailingState
    {
        if (!isset(self::$SENDING)) {
            self::$SENDING = new MailingState('sending');
        }
        return self::$SENDING;
    }
    public static function SENT(): MailingState
    {
        if (!isset(self::$SENT)) {
            self::$SENT = new MailingState('sent');
        }
        return self::$SENT;
    }
    public static function CANCELLED(): MailingState
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new MailingState('cancelled');
        }
        return self::$CANCELLED;
    }
    public static function FAILED(): MailingState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new MailingState('failed');
        }
        return self::$FAILED;
    }
}