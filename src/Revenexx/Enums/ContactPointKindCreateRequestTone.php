<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactPointKindCreateRequestTone implements JsonSerializable
{
    private static ContactPointKindCreateRequestTone $NEUTRAL;
    private static ContactPointKindCreateRequestTone $INFO;
    private static ContactPointKindCreateRequestTone $SUCCESS;
    private static ContactPointKindCreateRequestTone $WARNING;
    private static ContactPointKindCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): ContactPointKindCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ContactPointKindCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ContactPointKindCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ContactPointKindCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ContactPointKindCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ContactPointKindCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ContactPointKindCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ContactPointKindCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ContactPointKindCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ContactPointKindCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}