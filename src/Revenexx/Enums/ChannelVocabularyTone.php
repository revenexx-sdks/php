<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelVocabularyTone implements JsonSerializable
{
    private static ChannelVocabularyTone $NEUTRAL;
    private static ChannelVocabularyTone $INFO;
    private static ChannelVocabularyTone $SUCCESS;
    private static ChannelVocabularyTone $WARNING;
    private static ChannelVocabularyTone $DANGER;

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

    public static function NEUTRAL(): ChannelVocabularyTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new ChannelVocabularyTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): ChannelVocabularyTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new ChannelVocabularyTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): ChannelVocabularyTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new ChannelVocabularyTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): ChannelVocabularyTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new ChannelVocabularyTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): ChannelVocabularyTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new ChannelVocabularyTone('danger');
        }
        return self::$DANGER;
    }
}