<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingWriteStarter implements JsonSerializable
{
    private static MailingWriteStarter $BLANK;
    private static MailingWriteStarter $SIMPLE;
    private static MailingWriteStarter $NEWSLETTER;
    private static MailingWriteStarter $PROMOTION;

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

    public static function BLANK(): MailingWriteStarter
    {
        if (!isset(self::$BLANK)) {
            self::$BLANK = new MailingWriteStarter('blank');
        }
        return self::$BLANK;
    }
    public static function SIMPLE(): MailingWriteStarter
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new MailingWriteStarter('simple');
        }
        return self::$SIMPLE;
    }
    public static function NEWSLETTER(): MailingWriteStarter
    {
        if (!isset(self::$NEWSLETTER)) {
            self::$NEWSLETTER = new MailingWriteStarter('newsletter');
        }
        return self::$NEWSLETTER;
    }
    public static function PROMOTION(): MailingWriteStarter
    {
        if (!isset(self::$PROMOTION)) {
            self::$PROMOTION = new MailingWriteStarter('promotion');
        }
        return self::$PROMOTION;
    }
}