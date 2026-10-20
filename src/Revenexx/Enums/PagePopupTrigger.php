<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagePopupTrigger implements JsonSerializable
{
    private static PagePopupTrigger $EXITINTENT;
    private static PagePopupTrigger $DELAYSECONDS;
    private static PagePopupTrigger $SCROLLPERCENT;

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

    public static function EXITINTENT(): PagePopupTrigger
    {
        if (!isset(self::$EXITINTENT)) {
            self::$EXITINTENT = new PagePopupTrigger('exit_intent');
        }
        return self::$EXITINTENT;
    }
    public static function DELAYSECONDS(): PagePopupTrigger
    {
        if (!isset(self::$DELAYSECONDS)) {
            self::$DELAYSECONDS = new PagePopupTrigger('delay_seconds');
        }
        return self::$DELAYSECONDS;
    }
    public static function SCROLLPERCENT(): PagePopupTrigger
    {
        if (!isset(self::$SCROLLPERCENT)) {
            self::$SCROLLPERCENT = new PagePopupTrigger('scroll_percent');
        }
        return self::$SCROLLPERCENT;
    }
}