<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SalesRepVocabularyDefaultTone implements JsonSerializable
{
    private static SalesRepVocabularyDefaultTone $NEUTRAL;
    private static SalesRepVocabularyDefaultTone $INFO;
    private static SalesRepVocabularyDefaultTone $SUCCESS;
    private static SalesRepVocabularyDefaultTone $WARNING;
    private static SalesRepVocabularyDefaultTone $DANGER;

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

    public static function NEUTRAL(): SalesRepVocabularyDefaultTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new SalesRepVocabularyDefaultTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): SalesRepVocabularyDefaultTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new SalesRepVocabularyDefaultTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): SalesRepVocabularyDefaultTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new SalesRepVocabularyDefaultTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): SalesRepVocabularyDefaultTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new SalesRepVocabularyDefaultTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): SalesRepVocabularyDefaultTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new SalesRepVocabularyDefaultTone('danger');
        }
        return self::$DANGER;
    }
}