<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceVocabularyTone implements JsonSerializable
{
    private static PriceVocabularyTone $NEUTRAL;
    private static PriceVocabularyTone $INFO;
    private static PriceVocabularyTone $SUCCESS;
    private static PriceVocabularyTone $WARNING;
    private static PriceVocabularyTone $DANGER;

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

    public static function NEUTRAL(): PriceVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new PriceVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): PriceVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new PriceVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): PriceVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new PriceVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): PriceVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new PriceVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): PriceVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new PriceVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}