<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactPointKindUpdateRequestTone implements JsonSerializable
{
    private static ContactPointKindUpdateRequestTone $NEUTRAL;
    private static ContactPointKindUpdateRequestTone $INFO;
    private static ContactPointKindUpdateRequestTone $SUCCESS;
    private static ContactPointKindUpdateRequestTone $WARNING;
    private static ContactPointKindUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): ContactPointKindUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactPointKindUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactPointKindUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactPointKindUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactPointKindUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactPointKindUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactPointKindUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactPointKindUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactPointKindUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactPointKindUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}