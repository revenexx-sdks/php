<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelVocabularyRefName implements JsonSerializable
{
    private static ChannelVocabularyRefName $STATUSES;
    private static ChannelVocabularyRefName $TYPES;
    private static ChannelVocabularyRefName $UNASSIGNEDVISIBILITY;

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

    public static function STATUSES(): ChannelVocabularyRefName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new ChannelVocabularyRefName('statuses');
        }
        return self::$STATUSES;
    }
    public static function TYPES(): ChannelVocabularyRefName
    {
        if (!isset(self::$TYPES)) {
            self::$TYPES = new ChannelVocabularyRefName('types');
        }
        return self::$TYPES;
    }
    public static function UNASSIGNEDVISIBILITY(): ChannelVocabularyRefName
    {
        if (!isset(self::$UNASSIGNEDVISIBILITY)) {
            self::$UNASSIGNEDVISIBILITY = new ChannelVocabularyRefName('unassigned-visibility');
        }
        return self::$UNASSIGNEDVISIBILITY;
    }
}