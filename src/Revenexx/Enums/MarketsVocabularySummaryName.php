<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketsVocabularySummaryName implements JsonSerializable
{
    private static MarketsVocabularySummaryName $MARKETSTATUSES;

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

    public static function MARKETSTATUSES(): MarketsVocabularySummaryName
    {
        if (!isset(self::$MARKETSTATUSES)) {
            self::$MARKETSTATUSES = new MarketsVocabularySummaryName('market-statuses');
        }
        return self::$MARKETSTATUSES;
    }
}