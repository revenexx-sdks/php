<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelsVocabulariesGetName implements JsonSerializable
{
    private static ChannelsVocabulariesGetName $STATUSES;
    private static ChannelsVocabulariesGetName $TYPES;
    private static ChannelsVocabulariesGetName $UNASSIGNEDVISIBILITY;

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

    public static function STATUSES(): ChannelsVocabulariesGetName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new ChannelsVocabulariesGetName('statuses');
        }
        return self::$STATUSES;
    }
    public static function TYPES(): ChannelsVocabulariesGetName
    {
        if (!isset(self::$TYPES)) {
            self::$TYPES = new ChannelsVocabulariesGetName('types');
        }
        return self::$TYPES;
    }
    public static function UNASSIGNEDVISIBILITY(): ChannelsVocabulariesGetName
    {
        if (!isset(self::$UNASSIGNEDVISIBILITY)) {
            self::$UNASSIGNEDVISIBILITY = new ChannelsVocabulariesGetName('unassigned-visibility');
        }
        return self::$UNASSIGNEDVISIBILITY;
    }
}