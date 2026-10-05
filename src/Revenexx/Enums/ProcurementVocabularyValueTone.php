<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProcurementVocabularyValueTone implements JsonSerializable
{
    private static ProcurementVocabularyValueTone $NEUTRAL;
    private static ProcurementVocabularyValueTone $INFO;
    private static ProcurementVocabularyValueTone $SUCCESS;
    private static ProcurementVocabularyValueTone $WARNING;
    private static ProcurementVocabularyValueTone $DANGER;

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

    public static function NEUTRAL(): ProcurementVocabularyValueTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ProcurementVocabularyValueTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ProcurementVocabularyValueTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ProcurementVocabularyValueTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ProcurementVocabularyValueTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ProcurementVocabularyValueTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ProcurementVocabularyValueTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ProcurementVocabularyValueTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ProcurementVocabularyValueTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ProcurementVocabularyValueTone('danger');
        }
        return self::$DANGER;
    }
}