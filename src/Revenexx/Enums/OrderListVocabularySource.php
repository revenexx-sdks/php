<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListVocabularySource implements JsonSerializable
{
    private static OrderListVocabularySource $SCHEMA;
    private static OrderListVocabularySource $TABLE;

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

    public static function SCHEMA(): OrderListVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new OrderListVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
    public static function TABLE(): OrderListVocabularySource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new OrderListVocabularySource('table');
        }
        return self::$TABLE;
    }
}