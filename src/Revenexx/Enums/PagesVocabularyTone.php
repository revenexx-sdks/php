<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagesVocabularyTone implements JsonSerializable
{
    private static PagesVocabularyTone $NEUTRAL;
    private static PagesVocabularyTone $INFO;
    private static PagesVocabularyTone $SUCCESS;
    private static PagesVocabularyTone $WARNING;
    private static PagesVocabularyTone $DANGER;

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

    public static function NEUTRAL(): PagesVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new PagesVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): PagesVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new PagesVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): PagesVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new PagesVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): PagesVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new PagesVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): PagesVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new PagesVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}