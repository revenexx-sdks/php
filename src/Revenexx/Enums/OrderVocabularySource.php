<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderVocabularySource implements JsonSerializable
{
    private static OrderVocabularySource $SCHEMA;
    private static OrderVocabularySource $APP;

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

    public static function SCHEMA(): OrderVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new OrderVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
    public static function APP(): OrderVocabularySource
    {
        if (!isset(self::$APP)) {
            self::$APP = new OrderVocabularySource('app');
        }
        return self::$APP;
    }
}