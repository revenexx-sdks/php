<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartVocabularyTone implements JsonSerializable
{
    private static CartVocabularyTone $NEUTRAL;
    private static CartVocabularyTone $INFO;
    private static CartVocabularyTone $SUCCESS;
    private static CartVocabularyTone $WARNING;
    private static CartVocabularyTone $DANGER;

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

    public static function NEUTRAL(): CartVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new CartVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): CartVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new CartVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): CartVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new CartVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): CartVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new CartVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): CartVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new CartVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}