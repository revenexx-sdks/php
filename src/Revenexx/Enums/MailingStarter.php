<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingStarter implements JsonSerializable
{
    private static MailingStarter $BLANK;
    private static MailingStarter $SIMPLE;
    private static MailingStarter $NEWSLETTER;
    private static MailingStarter $PROMOTION;

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

    public static function BLANK(): MailingStarter
    {
        if (!isset(self::$BLANK)) {
            self::$BLANK = new MailingStarter('blank');
        }
        return self::$BLANK;
    }
    public static function SIMPLE(): MailingStarter
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new MailingStarter('simple');
        }
        return self::$SIMPLE;
    }
    public static function NEWSLETTER(): MailingStarter
    {
        if (!isset(self::$NEWSLETTER)) {
            self::$NEWSLETTER = new MailingStarter('newsletter');
        }
        return self::$NEWSLETTER;
    }
    public static function PROMOTION(): MailingStarter
    {
        if (!isset(self::$PROMOTION)) {
            self::$PROMOTION = new MailingStarter('promotion');
        }
        return self::$PROMOTION;
    }
}