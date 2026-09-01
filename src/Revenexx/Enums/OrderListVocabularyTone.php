<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListVocabularyTone implements JsonSerializable
{
    private static OrderListVocabularyTone $NEUTRAL;
    private static OrderListVocabularyTone $INFO;
    private static OrderListVocabularyTone $SUCCESS;
    private static OrderListVocabularyTone $WARNING;
    private static OrderListVocabularyTone $DANGER;

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

    public static function NEUTRAL(): OrderListVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new OrderListVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): OrderListVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new OrderListVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): OrderListVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new OrderListVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): OrderListVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new OrderListVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): OrderListVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new OrderListVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}