<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderVocabularyTone implements JsonSerializable
{
    private static OrderVocabularyTone $NEUTRAL;
    private static OrderVocabularyTone $INFO;
    private static OrderVocabularyTone $SUCCESS;
    private static OrderVocabularyTone $WARNING;
    private static OrderVocabularyTone $DANGER;

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

    public static function NEUTRAL(): OrderVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new OrderVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): OrderVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new OrderVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): OrderVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new OrderVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): OrderVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new OrderVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): OrderVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new OrderVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}