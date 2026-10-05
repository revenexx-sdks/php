<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCentersVocabularyTone implements JsonSerializable
{
    private static CostCentersVocabularyTone $NEUTRAL;
    private static CostCentersVocabularyTone $INFO;
    private static CostCentersVocabularyTone $SUCCESS;
    private static CostCentersVocabularyTone $WARNING;
    private static CostCentersVocabularyTone $DANGER;

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

    public static function NEUTRAL(): CostCentersVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new CostCentersVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): CostCentersVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new CostCentersVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): CostCentersVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new CostCentersVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): CostCentersVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new CostCentersVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): CostCentersVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new CostCentersVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}