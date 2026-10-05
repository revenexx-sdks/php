<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProcurementVocabularySource implements JsonSerializable
{
    private static ProcurementVocabularySource $SCHEMA;

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

    public static function SCHEMA(): ProcurementVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new ProcurementVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}