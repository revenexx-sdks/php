<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceVocabularySource implements JsonSerializable
{
    private static PriceVocabularySource $SCHEMA;

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

    public static function SCHEMA(): PriceVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new PriceVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}