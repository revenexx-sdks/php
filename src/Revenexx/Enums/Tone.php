<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Tone implements JsonSerializable
{
    private static Tone $NEUTRAL;
    private static Tone $INFO;
    private static Tone $SUCCESS;
    private static Tone $WARNING;
    private static Tone $DANGER;

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

    public static function NEUTRAL(): Tone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new Tone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): Tone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new Tone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): Tone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new Tone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): Tone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new Tone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): Tone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new Tone('danger');
        }
        return self::$DANGER;
    }
}