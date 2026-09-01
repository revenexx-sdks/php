<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListVocabularyDefaultTone implements JsonSerializable
{
    private static OrderListVocabularyDefaultTone $NEUTRAL;
    private static OrderListVocabularyDefaultTone $INFO;
    private static OrderListVocabularyDefaultTone $SUCCESS;
    private static OrderListVocabularyDefaultTone $WARNING;
    private static OrderListVocabularyDefaultTone $DANGER;

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

    public static function NEUTRAL(): OrderListVocabularyDefaultTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new OrderListVocabularyDefaultTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): OrderListVocabularyDefaultTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new OrderListVocabularyDefaultTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): OrderListVocabularyDefaultTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new OrderListVocabularyDefaultTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): OrderListVocabularyDefaultTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new OrderListVocabularyDefaultTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): OrderListVocabularyDefaultTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new OrderListVocabularyDefaultTone('danger');
        }
        return self::$DANGER;
    }
}