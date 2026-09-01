<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ChannelVocabularySource implements JsonSerializable
{
    private static ChannelVocabularySource $SCHEMA;
    private static ChannelVocabularySource $TABLE;

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

    public static function SCHEMA(): ChannelVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new ChannelVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
    public static function TABLE(): ChannelVocabularySource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new ChannelVocabularySource('table');
        }
        return self::$TABLE;
    }
}