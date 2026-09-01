<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Reason implements JsonSerializable
{
    private static Reason $HARDBOUNCE;
    private static Reason $COMPLAINT;
    private static Reason $UNSUBSCRIBE;
    private static Reason $MANUAL;

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

    public static function HARDBOUNCE(): Reason
    {
        if (!isset(self::$HARDBOUNCE)) {
            self::$HARDBOUNCE = new Reason('hard_bounce');
        }
        return self::$HARDBOUNCE;
    }
    public static function COMPLAINT(): Reason
    {
        if (!isset(self::$COMPLAINT)) {
            self::$COMPLAINT = new Reason('complaint');
        }
        return self::$COMPLAINT;
    }
    public static function UNSUBSCRIBE(): Reason
    {
        if (!isset(self::$UNSUBSCRIBE)) {
            self::$UNSUBSCRIBE = new Reason('unsubscribe');
        }
        return self::$UNSUBSCRIBE;
    }
    public static function MANUAL(): Reason
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new Reason('manual');
        }
        return self::$MANUAL;
    }
}