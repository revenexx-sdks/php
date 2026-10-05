<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoryVocabularySource implements JsonSerializable
{
    private static InventoryVocabularySource $SCHEMA;
    private static InventoryVocabularySource $TABLE;

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
    public static function TABLE(): InventoryVocabularySource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new InventoryVocabularySource('table');
        }
        return self::$TABLE;
    }
}