<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoryVocabularySource implements JsonSerializable
{
    private static InventoryVocabularySource $SCHEMA;

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

    public static function SCHEMA(): InventoryVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new InventoryVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}