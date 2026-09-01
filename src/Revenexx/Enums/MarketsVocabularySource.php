<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketsVocabularySource implements JsonSerializable
{
    private static MarketsVocabularySource $SCHEMA;

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

    public static function SCHEMA(): MarketsVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new MarketsVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}