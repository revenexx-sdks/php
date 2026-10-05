<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProcurementVocabularyDefaultTone implements JsonSerializable
{
    private static ProcurementVocabularyDefaultTone $NEUTRAL;
    private static ProcurementVocabularyDefaultTone $INFO;
    private static ProcurementVocabularyDefaultTone $SUCCESS;
    private static ProcurementVocabularyDefaultTone $WARNING;
    private static ProcurementVocabularyDefaultTone $DANGER;

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

    public static function NEUTRAL(): ProcurementVocabularyDefaultTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ProcurementVocabularyDefaultTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ProcurementVocabularyDefaultTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ProcurementVocabularyDefaultTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ProcurementVocabularyDefaultTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ProcurementVocabularyDefaultTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ProcurementVocabularyDefaultTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ProcurementVocabularyDefaultTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ProcurementVocabularyDefaultTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ProcurementVocabularyDefaultTone('danger');
        }
        return self::$DANGER;
    }
}