<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingVocabularySource implements JsonSerializable
{
    private static ShippingVocabularySource $SCHEMA;
    private static ShippingVocabularySource $TABLE;

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

    public static function SCHEMA(): ShippingVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new ShippingVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
    public static function TABLE(): ShippingVocabularySource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new ShippingVocabularySource('table');
        }
        return self::$TABLE;
    }
}