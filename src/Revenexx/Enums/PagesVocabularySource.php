<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagesVocabularySource implements JsonSerializable
{
    private static PagesVocabularySource $SCHEMA;

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

    public static function SCHEMA(): PagesVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new PagesVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}