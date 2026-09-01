<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelVocabularyName implements JsonSerializable
{
    private static ChannelVocabularyName $STATUSES;
    private static ChannelVocabularyName $TYPES;
    private static ChannelVocabularyName $UNASSIGNEDVISIBILITY;

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

    public static function STATUSES(): ChannelVocabularyName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new ChannelVocabularyName('statuses');
        }
        return self::$STATUSES;
    }
    public static function TYPES(): ChannelVocabularyName
    {
        if (!isset(self::$TYPES)) {
            self::$TYPES = new ChannelVocabularyName('types');
        }
        return self::$TYPES;
    }
    public static function UNASSIGNEDVISIBILITY(): ChannelVocabularyName
    {
        if (!isset(self::$UNASSIGNEDVISIBILITY)) {
            self::$UNASSIGNEDVISIBILITY = new ChannelVocabularyName('unassigned-visibility');
        }
        return self::$UNASSIGNEDVISIBILITY;
    }
}