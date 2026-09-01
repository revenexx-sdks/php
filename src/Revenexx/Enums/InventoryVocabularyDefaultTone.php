<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoryVocabularyDefaultTone implements JsonSerializable
{
    private static InventoryVocabularyDefaultTone $NEUTRAL;
    private static InventoryVocabularyDefaultTone $INFO;
    private static InventoryVocabularyDefaultTone $SUCCESS;
    private static InventoryVocabularyDefaultTone $WARNING;
    private static InventoryVocabularyDefaultTone $DANGER;

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

    public static function NEUTRAL(): InventoryVocabularyDefaultTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new InventoryVocabularyDefaultTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): InventoryVocabularyDefaultTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new InventoryVocabularyDefaultTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): InventoryVocabularyDefaultTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new InventoryVocabularyDefaultTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): InventoryVocabularyDefaultTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new InventoryVocabularyDefaultTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): InventoryVocabularyDefaultTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new InventoryVocabularyDefaultTone('danger');
        }
        return self::$DANGER;
    }
}