<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SalesRepVocabularySource implements JsonSerializable
{
    private static SalesRepVocabularySource $TABLE;

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

    public static function TABLE(): SalesRepVocabularySource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new SalesRepVocabularySource('table');
        }
        return self::$TABLE;
    }
}