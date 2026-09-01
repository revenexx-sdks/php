<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingVocabularyDefaultTone implements JsonSerializable
{
    private static ShippingVocabularyDefaultTone $NEUTRAL;
    private static ShippingVocabularyDefaultTone $INFO;
    private static ShippingVocabularyDefaultTone $SUCCESS;
    private static ShippingVocabularyDefaultTone $WARNING;
    private static ShippingVocabularyDefaultTone $DANGER;

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

    public static function NEUTRAL(): ShippingVocabularyDefaultTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingVocabularyDefaultTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingVocabularyDefaultTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingVocabularyDefaultTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingVocabularyDefaultTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingVocabularyDefaultTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingVocabularyDefaultTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingVocabularyDefaultTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingVocabularyDefaultTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingVocabularyDefaultTone('danger');
        }
        return self::$DANGER;
    }
}