<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingVocabularyTone implements JsonSerializable
{
    private static ShippingVocabularyTone $NEUTRAL;
    private static ShippingVocabularyTone $INFO;
    private static ShippingVocabularyTone $SUCCESS;
    private static ShippingVocabularyTone $WARNING;
    private static ShippingVocabularyTone $DANGER;

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

    public static function NEUTRAL(): ShippingVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ShippingVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ShippingVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ShippingVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ShippingVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ShippingVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ShippingVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ShippingVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ShippingVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ShippingVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}