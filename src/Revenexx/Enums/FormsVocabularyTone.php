<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormsVocabularyTone implements JsonSerializable
{
    private static FormsVocabularyTone $NEUTRAL;
    private static FormsVocabularyTone $INFO;
    private static FormsVocabularyTone $SUCCESS;
    private static FormsVocabularyTone $WARNING;
    private static FormsVocabularyTone $DANGER;

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

    public static function NEUTRAL(): FormsVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new FormsVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): FormsVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new FormsVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): FormsVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new FormsVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): FormsVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new FormsVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): FormsVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new FormsVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}