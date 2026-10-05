<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactPointKindTone implements JsonSerializable
{
    private static ContactPointKindTone $NEUTRAL;
    private static ContactPointKindTone $INFO;
    private static ContactPointKindTone $SUCCESS;
    private static ContactPointKindTone $WARNING;
    private static ContactPointKindTone $DANGER;

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

    public static function NEUTRAL(): ContactPointKindTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactPointKindTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactPointKindTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactPointKindTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactPointKindTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactPointKindTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactPointKindTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactPointKindTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactPointKindTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactPointKindTone('danger');
        }
        return self::$DANGER;
    }
}