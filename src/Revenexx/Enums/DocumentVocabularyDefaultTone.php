<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentVocabularyDefaultTone implements JsonSerializable
{
    private static DocumentVocabularyDefaultTone $NEUTRAL;
    private static DocumentVocabularyDefaultTone $INFO;
    private static DocumentVocabularyDefaultTone $SUCCESS;
    private static DocumentVocabularyDefaultTone $WARNING;
    private static DocumentVocabularyDefaultTone $DANGER;

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

    public static function NEUTRAL(): DocumentVocabularyDefaultTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new DocumentVocabularyDefaultTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): DocumentVocabularyDefaultTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new DocumentVocabularyDefaultTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): DocumentVocabularyDefaultTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new DocumentVocabularyDefaultTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): DocumentVocabularyDefaultTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new DocumentVocabularyDefaultTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): DocumentVocabularyDefaultTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new DocumentVocabularyDefaultTone('danger');
        }
        return self::$DANGER;
    }
}