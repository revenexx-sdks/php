<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketsVocabularyName implements JsonSerializable
{
    private static MarketsVocabularyName $MARKETSTATUSES;

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

    public static function MARKETSTATUSES(): MarketsVocabularyName
    {
        if (!isset(self::$MARKETSTATUSES)) {
            self::$MARKETSTATUSES = new MarketsVocabularyName('market-statuses');
        }
        return self::$MARKETSTATUSES;
    }
}