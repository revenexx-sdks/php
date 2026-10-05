<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCentersVocabularySource implements JsonSerializable
{
    private static CostCentersVocabularySource $SCHEMA;

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

    public static function SCHEMA(): CostCentersVocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new CostCentersVocabularySource('schema');
        }
        return self::$SCHEMA;
    }
}