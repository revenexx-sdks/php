<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VocabularyTone implements JsonSerializable
{
    private static VocabularyTone $NEUTRAL;
    private static VocabularyTone $INFO;
    private static VocabularyTone $SUCCESS;
    private static VocabularyTone $WARNING;
    private static VocabularyTone $DANGER;

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

    public static function NEUTRAL(): VocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new VocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): VocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new VocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): VocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new VocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): VocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new VocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): VocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new VocabularyTone('danger');
        }
        return self::$DANGER;
    }
}