<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentVocabularySource implements JsonSerializable
{
    private static DocumentVocabularySource $TABLE;
    private static DocumentVocabularySource $SCHEMA;

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

    public static function TABLE(): DocumentVocabularySource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new DocumentVocabularySource('table');
        }
        return self::$TABLE;
    }
    public static function SCHEMA(): DocumentVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new DocumentVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}