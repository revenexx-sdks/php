<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentVocabularyTone implements JsonSerializable
{
    private static DocumentVocabularyTone $NEUTRAL;
    private static DocumentVocabularyTone $INFO;
    private static DocumentVocabularyTone $SUCCESS;
    private static DocumentVocabularyTone $WARNING;
    private static DocumentVocabularyTone $DANGER;

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

    public static function NEUTRAL(): DocumentVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new DocumentVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): DocumentVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new DocumentVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): DocumentVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new DocumentVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): DocumentVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new DocumentVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): DocumentVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new DocumentVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}