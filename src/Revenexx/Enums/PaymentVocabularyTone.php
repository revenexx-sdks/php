<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentVocabularyTone implements JsonSerializable
{
    private static PaymentVocabularyTone $NEUTRAL;
    private static PaymentVocabularyTone $INFO;
    private static PaymentVocabularyTone $SUCCESS;
    private static PaymentVocabularyTone $WARNING;
    private static PaymentVocabularyTone $DANGER;

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

    public static function NEUTRAL(): PaymentVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new PaymentVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): PaymentVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new PaymentVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): PaymentVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new PaymentVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): PaymentVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new PaymentVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): PaymentVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new PaymentVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}