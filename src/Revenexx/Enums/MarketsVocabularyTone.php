<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketsVocabularyTone implements JsonSerializable
{
    private static MarketsVocabularyTone $NEUTRAL;
    private static MarketsVocabularyTone $INFO;
    private static MarketsVocabularyTone $SUCCESS;
    private static MarketsVocabularyTone $WARNING;
    private static MarketsVocabularyTone $DANGER;

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

    public static function NEUTRAL(): MarketsVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new MarketsVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): MarketsVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new MarketsVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): MarketsVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new MarketsVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): MarketsVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new MarketsVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): MarketsVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new MarketsVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}