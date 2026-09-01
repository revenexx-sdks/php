<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartVocabularySource implements JsonSerializable
{
    private static CartVocabularySource $SCHEMA;

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

    public static function SCHEMA(): CartVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new CartVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}