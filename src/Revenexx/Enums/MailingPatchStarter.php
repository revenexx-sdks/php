<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingPatchStarter implements JsonSerializable
{
    private static MailingPatchStarter $BLANK;
    private static MailingPatchStarter $SIMPLE;
    private static MailingPatchStarter $NEWSLETTER;
    private static MailingPatchStarter $PROMOTION;

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

    public static function BLANK(): MailingPatchStarter
    {
        if (!isset(self::$BLANK)) {
            self::$BLANK = new MailingPatchStarter('blank');
        }
        return self::$BLANK;
    }
    public static function SIMPLE(): MailingPatchStarter
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new MailingPatchStarter('simple');
        }
        return self::$SIMPLE;
    }
    public static function NEWSLETTER(): MailingPatchStarter
    {
        if (!isset(self::$NEWSLETTER)) {
            self::$NEWSLETTER = new MailingPatchStarter('newsletter');
        }
        return self::$NEWSLETTER;
    }
    public static function PROMOTION(): MailingPatchStarter
    {
        if (!isset(self::$PROMOTION)) {
            self::$PROMOTION = new MailingPatchStarter('promotion');
        }
        return self::$PROMOTION;
    }
}