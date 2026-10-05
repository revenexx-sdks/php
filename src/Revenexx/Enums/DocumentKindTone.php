<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentKindTone implements JsonSerializable
{
    private static DocumentKindTone $NEUTRAL;
    private static DocumentKindTone $INFO;
    private static DocumentKindTone $SUCCESS;
    private static DocumentKindTone $WARNING;
    private static DocumentKindTone $DANGER;

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

    public static function NEUTRAL(): DocumentKindTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new DocumentKindTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): DocumentKindTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new DocumentKindTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): DocumentKindTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new DocumentKindTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): DocumentKindTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new DocumentKindTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): DocumentKindTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new DocumentKindTone('danger');
        }
        return self::$DANGER;
    }
}