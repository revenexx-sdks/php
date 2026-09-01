<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VocabularyDefaultTone implements JsonSerializable
{
    private static VocabularyDefaultTone $NEUTRAL;
    private static VocabularyDefaultTone $INFO;
    private static VocabularyDefaultTone $SUCCESS;
    private static VocabularyDefaultTone $WARNING;
    private static VocabularyDefaultTone $DANGER;

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

    public static function NEUTRAL(): VocabularyDefaultTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new VocabularyDefaultTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): VocabularyDefaultTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new VocabularyDefaultTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): VocabularyDefaultTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new VocabularyDefaultTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): VocabularyDefaultTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new VocabularyDefaultTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): VocabularyDefaultTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new VocabularyDefaultTone('danger');
        }
        return self::$DANGER;
    }
}