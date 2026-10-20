<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SuppressionIndexReason implements JsonSerializable
{
    private static SuppressionIndexReason $HARDBOUNCE;
    private static SuppressionIndexReason $COMPLAINT;
    private static SuppressionIndexReason $UNSUBSCRIBE;
    private static SuppressionIndexReason $MANUAL;

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

    public static function HARDBOUNCE(): SuppressionIndexReason
    {
        if (!isset(self::$HARDBOUNCE)) {
            self::$HARDBOUNCE = new SuppressionIndexReason('hard_bounce');
        }
        return self::$HARDBOUNCE;
    }
    public static function COMPLAINT(): SuppressionIndexReason
    {
        if (!isset(self::$COMPLAINT)) {
            self::$COMPLAINT = new SuppressionIndexReason('complaint');
        }
        return self::$COMPLAINT;
    }
    public static function UNSUBSCRIBE(): SuppressionIndexReason
    {
        if (!isset(self::$UNSUBSCRIBE)) {
            self::$UNSUBSCRIBE = new SuppressionIndexReason('unsubscribe');
        }
        return self::$UNSUBSCRIBE;
    }
    public static function MANUAL(): SuppressionIndexReason
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new SuppressionIndexReason('manual');
        }
        return self::$MANUAL;
    }
}